<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function index() {
        return view('opciones.añadir');
    }

    public function store(Request $request) {
        $User = new User();

        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = $request->password;

        $User->save();

        return redirect()-> route('inicio.index');
        
    }
}
