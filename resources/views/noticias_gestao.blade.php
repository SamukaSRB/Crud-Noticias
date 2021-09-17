@extends('layouts.app')

@section('conteudo')

        @if(count($noticia)==0)
                <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="alert alert-danger">Não existe notícias</p>
                            </div>
                </div>
        @else


        @foreach ($noticia as $dados)

        @include('includes.linha_noticia')

        @endforeach

@endif

@endsection
