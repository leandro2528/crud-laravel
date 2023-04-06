@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
    <div class="container">

        <h1 class="mt-3 mb-3">Lista de Jogos</h1>
        <table class="table table-hover table-striped table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>#</th>
                    <th>NOME</th>
                    <th>CATEGORIA</th>
                    <th>ANO DE CRIAÇÃO</th>
                    <th>VALOR</th>
                    <th>AÇÃO</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($jogos as $jogo)
                    <tr>
                        <td> {{ $jogo->id }} </td>
                        <td> {{ $jogo->nome }} </td>
                        <td> {{ $jogo->categoria }} </td>
                        <td> {{ $jogo->ano_criaçao }} </td>
                        <td> {{ $jogo->valor }} </td>
                        <td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Ecluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
