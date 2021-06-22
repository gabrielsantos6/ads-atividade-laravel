@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">Lista de Filmes</h1>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Ano de Lançamento</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach($filmes as $f)
                    
                            <tr>
                            <th scope="row">{{$f->id}}</th>
                            <td>{{$f->nome}}</td>
                            <td>{{$f->genero}}</td>
                            <td>{{$f->Lancamento}}</td>
                            <td><a href="filmes/{{$f->id}}/edit" class="btn btn-info">Editar</a></td>
                            <td>
                            <form action="filmes/delete/{{$f->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Deletar</button>
                            </form>
                            
                            </td>
                            </tr>
                    @endforeach
                    </tbody>
                        </table>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4">
            <a href="{{url('filmes/add')}}" class="btn btn-primary text-center">Cadastrar novo Filme</a></div>
            </div>
            
        </div>
    </div>
</div>
@endsection