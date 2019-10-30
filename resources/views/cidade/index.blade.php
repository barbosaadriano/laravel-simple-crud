@extends('layouts.tads')
@section('title')
    Lista de cidades
@endsection
@section('menu')
 Cidades
 <a href="{{route('cidades.create')}}" class="btn btn-success btn-lg"><i class="fas fa-plus"></i> adicionar</a>
@endsection
@section('conteudo')
<div class="row">
@if(session('success'))
 <div class="alert alert-success">{{session('success')}}</div>
@endif    
</div>
<br>
<form method="post">
    @csrf
    @method('get')
    <div class="input-group mb-3">
        <input type="text" class="form-control" 
            placeholder="procure aqui pelo nome da cidade" name="pesquisa">
        <div class="input-group-append">
            <button class="btn btn-outline-info" type="submit">
                pesquisar
            </button>
        </div>
    </div>    
</form>
<hr>
 @if(isset($cidades))
 <div class="row">
    <div class="col-md-12">
        @foreach($cidades as $cid)
        <a  href="{{route('cidades.edit',['cidade'=>$cid->id])}}">
            <div class="estado">             
                <h2>{{$cid->nome}}</h2>
                <a  href="{{route('cidades.confirm',['cidade'=>$cid->id])}}" 
                class="btn btn-danger btn-sm right"><i class="fas fa-trash"></i></a>
            </div>
            </a>            
        @endforeach
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            {{$cidades->links()}}
        </div>
    </div>
 @endif
 <hr>
@endsection
@section('custom-style')
    .estado {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        float:left;
        position:relative;
        width: 32.4%;
        box-shadow: 2px 2px 2px #eee;
        -moz-box-shadow: 2px 2px 2px #eee;
        -webkit-box-shadow: 2px 2px 2px #eee;
        padding: 10px;
        margin: 5px;
    }
    .estado h2 {
        display: inline-block;
    }
    .right {
        float:right;
    }
@endsection
