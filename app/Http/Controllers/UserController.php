<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::with('domicilios')->get();
        foreach ($users as $user) {
            $user->edad = $user->calcularEdad();
        }
        return response()->json($users);
    }
}
