<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function postContact(ContactRequest $request)
    {
        return view('confirm');
    }
}
