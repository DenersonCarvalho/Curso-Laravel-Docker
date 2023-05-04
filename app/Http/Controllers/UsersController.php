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
        //dd('show.index', $id);
        //$users = User::where('id', '=', $id)->first();
        //dd($users);
        //$users = User::find($id);
        /*if($users = User::find($id));
        dd($users);*/
        /*if(!$users = User::find($id))
            return redirect()->back();*/
        if(!$user = User::find($id))
            return redirect()->route('users.index');
            return view('users.show', compact('user'));
    }

    public function create()
    {
            return view('users.create');
    }
    public function store(Request $request)
    {
            //dd($request->all());
            /*$user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();*/
            //User::create($request->all());
            
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
            User::create($data);
            return redirect()-route('users.index');
    }
}
