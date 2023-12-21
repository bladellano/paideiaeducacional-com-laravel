<?php

namespace App\Http\Controllers;

use App\Mail\Mail as MailPortal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {

        $data = $request->all();

        try {
            Mail::to('diretor@paideiaeducacional.com')->send(new MailPortal($data));
            return redirect()->route('site.home')->with('message', 'E-mail enviado com sucesso!');
            
        } catch (\Exception $e) {
            return redirect()->route('site.home')->with('message', 'Falha ao tentar entrar em contato. Tente novamente mais tarde.');
        }
    }
}
