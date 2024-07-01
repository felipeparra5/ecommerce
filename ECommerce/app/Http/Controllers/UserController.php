<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showFormRegister(Request $request) {
        return "Registrar";
    }

    function register(Request $request) {
        return "Enviou form";
    }

    function profile(Request $request) {
        return "perfil";
    }
}