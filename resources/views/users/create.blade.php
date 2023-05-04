@extends('layouts.app')
@section('title', 'Cadastrar')
@section('content')
<h1>Cadastrar Usuários</h1>
(<a href="{{route('users.index')}}"> <- Voltar</a>)
<form action="{{route('users.store')}}" method="post">
    @csrf
    <input type="text" name="name" id="" placeholder="Nome" required>
    <input type="email" name="email" id="" placeholder="Email" required>
    <input type="password" name="password" id="" placeholder="Senha" required>

    <button type="submit">Cadastrar</button>
</form>
@endsection