<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\website_info;
use App\Models\ContactUs;

class HomeController extends Controller
{

    public function home()
    {
        $data = website_info::all();
        return view('frontend.index', ['data' => $data]);
    }

    public function blog()
    {
        $data = website_info::all();
        return view('frontend.blog-single', ['data' => $data]);
    }
    public function add_customer()
    {
        return view('backend.add-customer');
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function contact()
    {
        $data = website_info::all();
        return view('frontend.contact', ['data' => $data]);
    }

    public function contact_form(Request $req)
    {

        $req->validate([

            'name' => 'required',
            'phone' => 'required',
        ]);

        $leads = ContactUs::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'service' => $req->service,
            'message' => $req->message,

        ]);

        if ($leads) {
            return redirect('home');
        } else {
            return redirect('home')->withErrors('Some Error Occurred');
        }
    }
}
