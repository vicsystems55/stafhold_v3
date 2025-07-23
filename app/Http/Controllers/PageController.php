<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'Welcome to Stafhold Group',
            'description' => 'Stafhold Group offers expert healthcare decontamination, cargo services, and compassionate home care throughout the UK.',
            'seoImage' => asset('images/seo/home.jpg')
        ]);
    }

    public function whoWeAre()
    {
        return view('pages.who-we-are', [
            'title' => 'Who We Are | Stafhold Group',
            'description' => 'Learn about Stafhold Group’s mission, values, and dedicated team behind our multi-sector services.',
            'seoImage' => asset('images/seo/who-we-are.jpg')
        ]);
    }

    public function services()
    {
        return view('pages.services', [
            'title' => 'Our Services | Stafhold Group',
            'description' => 'Explore our core services: healthcare decontamination, cargo logistics, and home care support.',
            'seoImage' => asset('images/seo/services.jpg')
        ]);
    }

    public function contactUs()
    {
        return view('pages.contact-us', [
            'title' => 'Contact Us | Stafhold Group',
            'description' => 'Get in touch with Stafhold Group for inquiries, bookings, and support.',
            'seoImage' => asset('images/seo/contact-us.jpg')
        ]);
    }

    public function blog()
    {
        return view('pages.blog', [
            'title' => 'Insights & Updates | Stafhold Blog',
            'description' => 'Read our latest posts, news, and industry insights on healthcare, logistics, and caregiving.',
            'seoImage' => asset('images/seo/blog.jpg')
        ]);
    }

    public function post($slug)
    {
        // For now, mock content — later, replace with actual blog logic
        return view('pages.post', [
            'title' => ucwords(str_replace('-', ' ', $slug)) . ' | Stafhold Blog',
            'description' => 'Read this post on ' . ucwords(str_replace('-', ' ', $slug)) . ' at Stafhold.',
            'seoImage' => asset('images/seo/post.jpg'),
            'slug' => $slug
        ]);
    }

    public function contact()
    {
        return view('pages.contact-us', [
            'title' => 'Contact Us | Stafhold Group',
            'description' => 'Get in touch with Stafhold Group for inquiries, bookings, and support.',
            'seoImage' => asset('images/seo/contact.jpg')
        ]);
    }
}
