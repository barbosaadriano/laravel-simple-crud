@extends('layouts.tads')
@section('title')
    Cadastros de cidades
@endsection
@section('menu')
<a href="{{route('cidades.index')}}" class="btn btn-warning btn-lg">Voltar</a>
@endsection
@section('conteudo')
<br>
<form method="post" 
@if(isset($cidade))
    action="{{route('cidades.update',['cidade'=>$cidade->id])}}"
@else
    action="{{route('cidades.store')}}"
@endif
>
@if(isset($cidade))
    @method('put')
@endif
    @csrf
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" name="nome" id="nome" placeholder="Nome"
            @if(isset($cidade))
                value="{{$cidade->nome}}"
            @endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Estado</label>
        <div class="col-sm-10">
           <select name="estado_id" class="form-control">
                @if(isset($estados))
                    @foreach($estados as $est)
                        <option
                            @if(isset($cidade) && $cidade->estado() 
                                            && $est->id == $cidade->estado->id)
                                selected
                            @endif
                         value="{{$est->id}}">{{$est->nome}}</option>
                    @endforeach
                @else
                    @if(isset($cidade))
                        <option selected value="{{$cidade->estado->id}}">
                        {{$cidade->estado->nome}}
                        </option>
                    @endif
                @endif
           </select>
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
