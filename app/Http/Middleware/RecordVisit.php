<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordVisit
{
    public function handle(Request $request, Closure $next)
    {

        // Usuário não logado
        if (!Auth::check()) {

            // Registre a visita apenas se não for um bot
            if (!$this->isBot($request)) {
                Visit::create([
                    'ip_address' => $request->ip(),
                ]);
            }
        }

        return $next($request);
    }

    protected function isBot($request)
    {
        // Lógica para identificar bots
        return false;
    }
}
