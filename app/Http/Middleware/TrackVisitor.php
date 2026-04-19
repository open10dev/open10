<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    // Paths we don't want to track (admin, assets, health, etc.)
    private const SKIP_PREFIXES = [
        '/admin',
        '/newsletter',
        '/contact',
        '/_ignition',
        '/up',
        '/favicon',
        '/robots',
        '/build',
    ];

    // Known bot user-agent fragments
    private const BOT_PATTERNS = [
        'bot', 'crawl', 'spider', 'slurp', 'lighthouse', 'headless',
        'curl', 'wget', 'python', 'go-http', 'axios', 'insomnia',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($this->shouldTrack($request)) {
            $this->record($request);
        }

        return $response;
    }

    private function shouldTrack(Request $request): bool
    {
        if (!$request->isMethod('GET')) {
            return false;
        }

        $path = $request->getPathInfo();
        foreach (self::SKIP_PREFIXES as $prefix) {
            if (str_starts_with($path, $prefix)) {
                return false;
            }
        }

        return true;
    }

    private function record(Request $request): void
    {
        try {
            $ip        = $request->ip();
            $userAgent = $request->userAgent() ?? '';
            $isBot     = $this->isBot($userAgent);

            // Parse browser / platform from user-agent
            [$browser, $browserVersion, $platform, $isMobile] = $this->parseUserAgent($userAgent);

            // Geo lookup (non-blocking — fails gracefully)
            $geo     = null;
            $country = $countryCode = $region = $city = $lat = $lng = $isp = $timezone = null;

            try {
                // stevebauman/location skips local IPs automatically
                $geo = Location::get($ip);
            } catch (\Throwable) {
                // geo lookup failed — still record the visit without location
            }

            if ($geo) {
                $country     = $geo->countryName   ?? null;
                $countryCode = $geo->countryCode   ?? null;
                $region      = $geo->regionName    ?? null;
                $city        = $geo->cityName      ?? null;
                $lat         = $geo->latitude      ?? null;
                $lng         = $geo->longitude     ?? null;
                $isp         = $geo->isp           ?? null;
                $timezone    = $geo->timezone      ?? null;
            }

            Visitor::create([
                'ip_address'      => $ip,
                'country'         => $country,
                'country_code'    => $countryCode,
                'region'          => $region,
                'city'            => $city,
                'latitude'        => $lat,
                'longitude'       => $lng,
                'isp'             => $isp,
                'timezone'        => $timezone,
                'url'             => $request->fullUrl(),
                'referer'         => $request->header('referer'),
                'user_agent'      => $userAgent,
                'browser'         => $browser,
                'browser_version' => $browserVersion,
                'platform'        => $platform,
                'is_mobile'       => $isMobile,
                'is_bot'          => $isBot,
            ]);
        } catch (\Throwable) {
            // Never break the page if tracking fails
        }
    }

    private function isBot(string $ua): bool
    {
        $lower = strtolower($ua);
        foreach (self::BOT_PATTERNS as $pattern) {
            if (str_contains($lower, $pattern)) {
                return true;
            }
        }
        return false;
    }

    private function parseUserAgent(string $ua): array
    {
        $lower   = strtolower($ua);
        $browser = 'Unknown';
        $version = null;
        $mobile  = str_contains($lower, 'mobile') || str_contains($lower, 'android');

        // Browser
        $browserMap = [
            'Edg/'     => 'Edge',
            'OPR/'     => 'Opera',
            'Chrome/'  => 'Chrome',
            'Firefox/' => 'Firefox',
            'Safari/'  => 'Safari',
        ];
        foreach ($browserMap as $key => $name) {
            if (str_contains($ua, $key)) {
                $browser = $name;
                if (preg_match('/' . preg_quote($key, '/') . '([\d.]+)/', $ua, $m)) {
                    $version = explode('.', $m[1])[0];
                }
                break;
            }
        }

        // Platform
        $platform = 'Unknown';
        if (str_contains($lower, 'windows nt'))  { $platform = 'Windows'; }
        elseif (str_contains($lower, 'mac os x')) { $platform = 'macOS'; }
        elseif (str_contains($lower, 'android'))  { $platform = 'Android'; }
        elseif (str_contains($lower, 'iphone'))   { $platform = 'iOS'; }
        elseif (str_contains($lower, 'ipad'))     { $platform = 'iPadOS'; }
        elseif (str_contains($lower, 'linux'))    { $platform = 'Linux'; }

        return [$browser, $version, $platform, $mobile];
    }
}
