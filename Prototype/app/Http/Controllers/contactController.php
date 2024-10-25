<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class contactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        //specifiy Variables

        Mail::raw("Nom: {$data['name']}\nEmail: {$data['email']}\nMessage: {$data['message']}", function ($message) use ($data) {
            $message->to('bderafieelmrabet@gmail.com')
                    ->subject('Nouveau message de contact');
        });

        return redirect('/contact')->with('success', 'Votre message a bien été envoyé.'); 
    }
}