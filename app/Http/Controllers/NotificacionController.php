<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // De esta manera nos traemos las notificaciones que usua no leyo
        $notificaciones = auth()->user()->unreadNotifications;

        // de esta manera saca las notificacioes ya leidas
       auth()->user()->unreadNotifications->markAsRead();
       
        return view('notificaciones.index', [
            'notificaciones' => $notificaciones
        ]);
    }
}
