<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    /**
     * Subscribe to newsletter
     */
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Check if email already exists
            $existing = NewsletterSubscription::where('email', $request->email)->first();

            if ($existing) {
                // If previously unsubscribed, resubscribe
                if (!$existing->is_subscribed) {
                    $existing->update([
                        'is_subscribed' => true,
                        'subscribed_at' => now(),
                        'unsubscribed_at' => null,
                        'ip_address' => $request->ip(),
                        'user_agent' => $request->userAgent(),
                    ]);

                    return back()->with('success', 'Welcome back! You have been resubscribed to our newsletter.');
                }

                return back()->with('info', 'This email is already subscribed to our newsletter.');
            }

            // Create new subscription
            NewsletterSubscription::create([
                'email' => $request->email,
                'is_subscribed' => true,
                'unsubscribe_token' => NewsletterSubscription::generateUnsubscribeToken(),
                'subscribed_at' => now(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            return back()->with('success', 'Thank you for subscribing! You\'ll receive updates directly from the OPEN10 team.');

        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    /**
     * Unsubscribe from newsletter
     */
    public function unsubscribe(Request $request, $token)
    {
        try {
            $subscription = NewsletterSubscription::where('unsubscribe_token', $token)->firstOrFail();

            if (!$subscription->is_subscribed) {
                return view('newsletter.unsubscribe', [
                    'message' => 'You are already unsubscribed from our newsletter.',
                    'type' => 'info'
                ]);
            }

            $subscription->update([
                'is_subscribed' => false,
                'unsubscribed_at' => now(),
            ]);

            return view('newsletter.unsubscribe', [
                'message' => 'You have been successfully unsubscribed from our newsletter.',
                'type' => 'success'
            ]);

        } catch (\Exception $e) {
            return view('newsletter.unsubscribe', [
                'message' => 'Invalid unsubscribe link. Please contact us if you need assistance.',
                'type' => 'error'
            ]);
        }
    }
}
