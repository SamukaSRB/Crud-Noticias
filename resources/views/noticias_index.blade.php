{{-- Pagina inicial apresenta as noticias visiveis --}}
@extends('layouts.app')

@section('conteudo')

@if (count($dados)==0)
{{-- nao existe noticias --}}
    <p class="alert alert-danger">Não foram encontradas notícias</p>
@else
    {{-- Apresentar as noticias --}}

        {{-- contador --}}
        @php
        $total = 0;
        @endphp

    @foreach ($dados as $noticia)
    {{-- Verifica se as noticias esta visisvel  --}}
@if($noticia->visivel == 1)
     {{-- Cabeçalho da noticia --}}

    <div class="row bg-success">
        {{--Titulo  --}}
        <div class="col-md-9">
            <h2>{{$noticia->titulo}}</h2>
        </div>

        <div class="col-md-3 text-right p-2">
            {{-- Auto e hora --}}
            <i class="fas fa-pencil-alt">   {{$noticia->autor}}</i>
            <i class="fas fa-clock">     {{$noticia->updated_at->diffForHumans()}}</i>
        </div>

    </div>
    {{-- Corpo da noticia --}}
    <div class="row">
        <div class="col-md-12 p-3">
        {{$noticia->texto}}
        </div>

    </div>

        {{-- Atualização do total de noticias --}}
        @php
            $total++;
        @endphp
@endif
        {{-- separador --}}
        <hr>

    @endforeach
    <div class="row">
        <div class="col-md-12 text-right">

            <p>N.° total de notícias:{{$total}}</p>

        </div>
    </div>

@endif

@endsection


