@extends('layouts.tads')
@section('title')
    Cadastros de estados
@endsection
@section('menu')
<a href="{{route('estados.index')}}" class="btn btn-warning btn-lg">Voltar</a>
@endsection
@section('conteudo')
<br>
<form method="post" 
@if(isset($estado))
    action="{{route('estados.update',['estado'=>$estado->id])}}"
@else
    action="{{route('estados.store')}}"
@endif
>
@if(isset($estado))
    @method('put')
@endif
    @csrf
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" name="nome" id="nome" placeholder="Nome"
            @if(isset($estado))
                value="{{$estado->nome}}"
            @endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Sigla</label>
        <div class="col-sm-10">
            <input type="text" max="2" min="2" required 
            class="form-control" name="sigla" id="sigla" placeholder="sigla"
            @if(isset($estado))
                value="{{$estado->sigla}}"
            @endif>
        </div>
    </div>
    
    <button type="submit" class="btn btn-info btn-lg">Salvar <i class="fas fa-save"></i></button>
</form>
<br>
@if($errors->any())
    @foreach($errors->all() as $er)
        <div class="alert alert-danger">{{$er}}</div>
    @endforeach
@endif

@endsection
