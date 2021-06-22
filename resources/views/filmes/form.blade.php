@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if( Request::is('*/edit'))
                    <div class="card-header"> Editar Filme</div>

                    <div class="card-body">
                    <form action="{{ url('filmes/update') }}/{{$filme->id}}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" name="nome" class="form-control" value="{{$filme->nome}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Genero:</label>
                        <input type="text" name="genero" class="form-control" value="{{$filme->genero}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Data de lançamento:</label>
                        <input type="text" name="Lancamento" class="form-control" value="{{$filme->Lancamento}}">
                      </div>

                      <button type="submit" class="btn btn-primary">Atualizar</button>
                      <a href="{{ url('filmes') }}" class="btn btn-secondary">Voltar</a>
                    </form>

                    @else
                    <div class="card-header"> Cadastrar Filme</div>

                    <div class="card-body">
                    <form action="{{ url('filmes/store') }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" name="nome" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Genero:</label>
                        <input type="text" name="genero" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Data de lançamento:</label>
                        <input type="text" name="Lancamento" class="form-control">
                      </div>

                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                      <a href="{{ url('filmes') }}" class="btn btn-secondary">Voltar</a>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection