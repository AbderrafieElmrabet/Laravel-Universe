<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required'
    //     ]);
    //     Mail::send('email.contact', $data, function ($message) use ($data) {
    //         $message->to('abderafieelmrabet@gmail.com', 'Abderrafie Laravel')->subject('New contact Message');
    //     });
    //     //
    //     return redirect('/')->with('success', 'your message was sent.');
    // }
}