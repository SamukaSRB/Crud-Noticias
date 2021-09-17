@extends('layouts.app')

@section('conteudo')
<form method="POST" action="/atualizar_noticias/{{$noticia->id_noticias}}">

    {{-- crsf --}}
    {{csrf_field()}}

    <h3>Editar Noticias</h3>

    <div class="form_group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control" id="titulo" name="text_titulo" value="{{$noticia->titulo}}" required>
    </div>

    {{-- texto da noticia --}}
    <div class="form_group text-center p-2">
        <label  for="titulo">Texto:</label>
       <textarea class="form_control " name="text_texto" id="texto" placeholder="Texto da noticia"  cols="40" rows="5" required>{{$noticia->texto}}</textarea>
    </div>

     {{-- autor da noticia --}}
    <div class="form_group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control"  id="autor" name="text_autor" value="{{$noticia->autor}}" required>
    </div>

    {{-- visibilidade da noticia --}}
    <div class="form-group text-center">

    @if ($noticia->visivel == 1)
    <input type="checkbox" name="check_visivel" checked>Notícia visivel
    @else
    <input type="checkbox" name="check_visivel" >Notícia visivel
    @endif

    </div>

    {{-- Botao --}}
    <div class="text-center">
        <button class="btn btn-dark" role="submit">Atualizar</button>
    </div>

</form>



@endsection
