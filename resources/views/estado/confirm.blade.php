@extends('layouts.tads')
@section('title')
   Confirmar exclusão
@endsection
@section('conteudo')
<h1>Excluir Estado </h1>

<h2>Deseja realmente excluir {{$estado->nome}} ?</h2>

<form action="{{route('estados.destroy',['estado'=>$estado->id])}}" 
                method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">SIM</button>
            </form>
<a href="{{route('estados.index')}}">
Não
</a>

@endsection
