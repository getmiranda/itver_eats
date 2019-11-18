<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'subject' => 'required',
            'comments' => 'required',
        ]);
        $contact = new Contact();
        $contact->email = $request->email;
        $contact->comments = $request->comments;
        $contact->subject = $request->subject;
        $contact->save();
        Toastr::success('Tus comentario han sido enviados eats correctamente al equipo de Itver.', 'Éxito');
        return redirect()->route('welcome');
    }


}
