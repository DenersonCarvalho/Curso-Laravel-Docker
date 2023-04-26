<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get(); //! salvar o model (User) na variavel pelo metodo eggt
        //dd($users); //!
        //return view('users.index', ['users' => $users]);
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        dd('show.index', $id);
    }
}
