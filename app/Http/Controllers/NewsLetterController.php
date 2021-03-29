<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;

class NewsletterController extends Controller
{
    public function store(request $request)
    
    {
        Newsletter::subscribe($request->input('EMAIL'), [], 'subscribers');


        return redirect('/');
    }
}