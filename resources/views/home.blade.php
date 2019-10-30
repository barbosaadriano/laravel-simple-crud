@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Controle</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-3">
                    <a href="{{route('estados.index')}}"><div class="alert alert-info">
                        Estados
                    </div></a>
                    <a href="{{route('cidades.index')}}"><div class="alert alert-danger">
                        Cidade
                    </div></a>
                    </div>
                    <div class="col-md-3">
                    <a href="{{route('tads.get')}}"><div class="alert alert-warning">
                        TADS
                    </div></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
