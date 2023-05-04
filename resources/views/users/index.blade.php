@extends('layouts.app')
@section('title', 'Listagem')
@section('content')
<h1>Lista de Usuários</h1>
(<a href="{{route('users.create')}}"> + Cadastrar</a>)
<ul>
    @foreach($users as $user)
    <li>
        {{$user->name}} - {{$user->email}} - {{$user->created_at}}
        <a href="{{route('users.show', $user->id)}}">(Detalhes)</a>
    </li>
    @endforeach
</ul>
@endsection