@extends('layouts.app')
@section('title', 'Listagem')
@section('content')
<h1>Lista de Usuários</h1>
<ul>
    <li>
        {{$user->name}} - {{$user->email}} - {{$user->created_at}} 
    </li>
</ul>
@endsection