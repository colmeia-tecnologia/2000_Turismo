<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\Site\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact.index');
    }

    public function send(Request $request)
    {
        $data = $request->all();

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new Contato($data));

        Session::flash('message', ['Mensagem enviada com sucesso!']); 
        Session::flash('alert-type', 'alert-success');

        return redirect()->back();
    }
}
