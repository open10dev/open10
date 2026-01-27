<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home(): View
    {
        return view('welcome');
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        return view('about');
    }

    /**
     * Display the work/portfolio page.
     */
    public function work(): View
    {
        return view('work');
    }

    /**
     * Display the FAQ page.
     */
    public function faq(): View
    {
        return view('faq');
    }

    /**
     * Display the contact page.
     */
    public function contact(): View
    {
        return view('contact');
    }

    /**
     * Display the resources/blog page.
     */
    public function resources(): View
    {
        return view('resources');
    }

    /**
     * Display the services overview page.
     */
    public function services(): View
    {
        return view('services.index');
    }

    /**
     * Display the Development Foundations service page.
     */
    public function development(): View
    {
        return view('services.development');
    }

    /**
     * Display the AI-Assisted Delivery service page.
     */
    public function aiDelivery(): View
    {
        return view('services.ai-delivery');
    }

    /**
     * Display the Internal Developer Platforms service page.
     */
    public function idp(): View
    {
        return view('services.idp');
    }

    /**
     * Display the Secured Operations service page.
     */
    public function devops(): View
    {
        return view('services.devops');
    }

    /**
     * Display the solutions overview page.
     */
    public function solutions(): View
    {
        return view('solutions.index');
    }

    /**
     * Display the OSS Maintainers solution page.
     */
    public function ossMaintainers(): View
    {
        return view('solutions.oss-maintainers');
    }

    /**
     * Display the Engineering Teams solution page.
     */
    public function engineeringTeams(): View
    {
        return view('solutions.engineering-teams');
    }

    /**
     * Display the CTOs & Leaders solution page.
     */
    public function leadership(): View
    {
        return view('solutions.leadership');
    }
}
