<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'ip_address',
        'country',
        'country_code',
        'region',
        'city',
        'latitude',
        'longitude',
        'isp',
        'timezone',
        'url',
        'referer',
        'user_agent',
        'browser',
        'browser_version',
        'platform',
        'is_mobile',
        'is_bot',
    ];

    protected $casts = [
        'is_mobile' => 'boolean',
        'is_bot'    => 'boolean',
        'latitude'  => 'float',
        'longitude' => 'float',
    ];

    public function scopeHuman($query)
    {
        return $query->where('is_bot', false);
    }

    public function getLocationAttribute(): string
    {
        $parts = array_filter([
            $this->city,
            $this->region,
            $this->country,
        ]);
        return $parts ? implode(', ', $parts) : 'Unknown';
    }
}
