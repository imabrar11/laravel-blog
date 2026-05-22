<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function submitContactForm(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        return redirect()->route('post.contact')->with('status', 'Success');
    }
}
