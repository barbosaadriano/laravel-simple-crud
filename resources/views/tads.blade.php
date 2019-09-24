@extends('layouts.tads')
@section('title')
    Minha tela TADS
@endsection
@section('conteudo')
<h1>Minha view </h1>

@isset($msg)
    <h2>{{$msg}}</h2>
@endisset

<form method="post">
    @csrf
    <button type="submit">Enviar</button>
</form>
@endsection
@section('custom-style')
   body {
       background-color: #00FF00;
   }
@endsection