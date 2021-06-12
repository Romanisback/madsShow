<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
use App\Models\Client;
use App\Models\Review;
use App\Models\SiteCase;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Homepage
    public function home()
    {
        $bloggers = Blogger::orderBy('id', 'DESC')->get();

        return view('site.index', compact('bloggers'));
    }

    // Cases
    public function cases()
    {
        $cases = SiteCase::orderBy('id', 'DESC')->get();

        return view('site.cases', compact('cases'));
    }

    // Advantages
    public function advantages()
    {
        return view('site.advantages');
    }

    // Reviews
    public function reviews()
    {
        $reviews = Review::orderBy('id', 'DESC')->get();

        return view('site.reviews', compact('reviews'));
    }

    // Reviews
    public function clients()
    {
        $clients = Client::orderBy('id', 'DESC')->get();

        return view('site.clients', compact('clients'));
    }

    // formRequest
    public function formRequest(Request $request)
    {
        if ($request->isMethod('post')) {
            //
        }

        return view('site.form-request');
    }
}
