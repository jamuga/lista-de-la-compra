<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Pagina principal de la aplicacion
     * @return Response
     */
    public function getHome()
    {
        return redirect()->action([ProductoController::class, 'getIndex']);
    }
}
