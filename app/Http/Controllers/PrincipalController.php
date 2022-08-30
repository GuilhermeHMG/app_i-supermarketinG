<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //Action/Método da página principal da app
    public function principal(){
        echo "<h1>Bem-vindo ao i-supermarketinG!</h1>";
    }
}
