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
        $captcha = $data['g-recaptcha-response'];
        $res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".env('RECAPTCHA_SERVER')."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']));

        try {

            if(!$res->success)
                throw new \Exception('🚨 O tempo para a validação do captcha expirou, resultando na não efetivação da tentativa de contato.');

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new MailPortal($data));

            return redirect()->route('site.home')->with(['message' => '✅ E-mail enviado com sucesso!', 'fragment' => 'fale-conosco']);
            
        } catch (\Exception $e) {

            return redirect()->route('site.home')->with(['message' => $e->getMessage(), 'fragment' => 'fale-conosco']);

        }
    }
}
