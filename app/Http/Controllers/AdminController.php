<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\NewsletterSubscription;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    private const ADMIN_EMAIL = 'admin@open10.dev';

    // ─── Register ────────────────────────────────────────────────────────────

    public function registerForm()
    {
        if (Auth::check() && Auth::user()->email === self::ADMIN_EMAIL) {
            return redirect()->route('admin.contacts.index');
        }

        if (User::where('email', self::ADMIN_EMAIL)->exists()) {
            return redirect()->route('admin.login')
                ->with('info', 'Admin account already exists. Please log in.');
        }

        return view('admin.register');
    }

    public function register(Request $request)
    {
        // Block if admin account already exists
        if (User::where('email', self::ADMIN_EMAIL)->exists()) {
            return redirect()->route('admin.login')
                ->with('info', 'Admin account already exists. Please log in.');
        }

        $request->validate([
            'name'                  => 'required|string|max:100',
            'email'                 => 'required|email',
            'password'              => 'required|string|min:8|confirmed',
        ]);

        // Only the designated admin email is permitted
        if ($request->email !== self::ADMIN_EMAIL) {
            return back()
                ->withErrors(['email' => 'Only admin@open10.dev can register.'])
                ->withInput();
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => self::ADMIN_EMAIL,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Admin account created. Welcome!');
    }

    // ─── Login / Logout ──────────────────────────────────────────────────────

    public function loginForm()
    {
        if (Auth::check() && Auth::user()->email === self::ADMIN_EMAIL) {
            return redirect()->route('admin.contacts.index');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if ($request->email !== self::ADMIN_EMAIL) {
            return back()
                ->withErrors(['email' => 'Access denied.'])
                ->withInput();
        }

        if (Auth::attempt(
            ['email' => $request->email, 'password' => $request->password],
            $request->boolean('remember')
        )) {
            $request->session()->regenerate();
            return redirect()->route('admin.contacts.index');
        }

        return back()
            ->withErrors(['password' => 'Invalid credentials.'])
            ->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function contacts(Request $request)
    {
        $query = Contact::latest();

        if ($search = $request->get('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%");
            });
        }

        if ($helpType = $request->get('help_type')) {
            $query->where('help_type', $helpType);
        }

        $contacts = $query->paginate(15)->withQueryString();

        $stats = [
            'total'   => Contact::count(),
            'today'   => Contact::whereDate('created_at', today())->count(),
            'week'    => Contact::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count(),
            'month'   => Contact::whereMonth('created_at', now()->month)->count(),
        ];

        return view('admin.contacts.index', compact('contacts', 'stats'));
    }

    public function contactShow(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function contactDelete(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully.');
    }

    // ─── Subscribers ─────────────────────────────────────────────────────────

    public function subscribers(Request $request)
    {
        $query = NewsletterSubscription::latest();

        if ($search = $request->get('search')) {
            $query->where('email', 'like', "%{$search}%");
        }

        if ($request->get('status') === 'active') {
            $query->where('is_subscribed', true);
        } elseif ($request->get('status') === 'inactive') {
            $query->where('is_subscribed', false);
        }

        $subscribers = $query->paginate(20)->withQueryString();

        $stats = [
            'total'        => NewsletterSubscription::count(),
            'active'       => NewsletterSubscription::where('is_subscribed', true)->count(),
            'unsubscribed' => NewsletterSubscription::where('is_subscribed', false)->count(),
            'today'        => NewsletterSubscription::whereDate('created_at', today())->count(),
        ];

        return view('admin.subscribers.index', compact('subscribers', 'stats'));
    }

    public function subscriberDelete(NewsletterSubscription $subscriber)
    {
        $subscriber->delete();
        return redirect()->route('admin.subscribers.index')->with('success', 'Subscriber removed.');
    }

    // ─── Visitors ────────────────────────────────────────────────────────────

    public function visitors(Request $request)
    {
        $query = Visitor::latest();

        if ($search = $request->get('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('ip_address', 'like', "%{$search}%")
                  ->orWhere('city', 'like', "%{$search}%")
                  ->orWhere('country', 'like', "%{$search}%");
            });
        }

        if ($platform = $request->get('platform')) {
            $query->where('platform', $platform);
        }

        if ($request->get('bots') !== '1') {
            $query->where('is_bot', false);
        }

        $visitors = $query->paginate(25)->withQueryString();

        $stats = [
            'total'      => Visitor::count(),
            'today'      => Visitor::whereDate('created_at', today())->count(),
            'unique_ips' => Visitor::distinct('ip_address')->count('ip_address'),
            'human'      => Visitor::where('is_bot', false)->count(),
        ];

        $platforms = Visitor::whereNotNull('platform')->distinct()->pluck('platform')->sort()->values();

        return view('admin.visitors.index', compact('visitors', 'stats', 'platforms'));
    }

    public function visitorDelete(Visitor $visitor)
    {
        $visitor->delete();
        return redirect()->route('admin.visitors.index')->with('success', 'Visitor record deleted.');
    }
}
