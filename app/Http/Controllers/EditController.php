<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Prompts\Table;

class EditController extends Controller
{
    //
    public function index() 
    {
        $User = User::SELECT('*')
        //Table('users')
        //->DB::select('users.*')
        ->orderBy('id', 'ASC')
        ->get();
       // return $User;
        return view('layouts.app')->with('Users', $User);
    }

    public function edit(User $User)
    {
     return view('opciones.edit', compact('User'));
    }

    public function update(Request $request , User $User)
    {
      $User->name = $request->name;
      $User->email = $request->email;

      $User->save();

      return redirect()-> route('inicio.index', $User);
    }
}
