<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
use App\Models\Client;
use App\Models\Order;
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
            $this->validate($request, [
                'name' => 'required|min:3',
                'email' => 'required|string|email',
                'message' => 'required|min:5',
                'value' => 'required',
                'view' => 'required',
                'click' => 'required',
            ]);

            $order = new Order();
            $order->fill($request->all());

            if ($order->save()) {
                return response()->json(['status' => 200]);
            }

            return response()->json(['status' => 500]);
        }

        return view('site.form-request');
    }
}
