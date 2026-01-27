<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsletterSubscription extends Model
{
    protected $fillable = [
        'email',
        'is_subscribed',
        'unsubscribe_token',
        'subscribed_at',
        'unsubscribed_at',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'is_subscribed' => 'boolean',
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
    ];

    /**
     * Generate a unique unsubscribe token
     */
    public static function generateUnsubscribeToken(): string
    {
        return Str::random(64);
    }

    /**
     * Scope to get only subscribed users
     */
    public function scopeSubscribed($query)
    {
        return $query->where('is_subscribed', true);
    }

    /**
     * Scope to get unsubscribed users
     */
    public function scopeUnsubscribed($query)
    {
        return $query->where('is_subscribed', false);
    }
}
