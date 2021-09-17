@extends('layouts.app')

@section('conteudo')
<form method="POST" action="/salvar_noticia">

    {{-- crsf --}}
    {{csrf_field()}}
    <div class="form_group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control" id="titulo" name="text_titulo" placeholder="Titulo" required>
    </div>

    {{-- texto da noticia --}}
    <div class="form_group text-center p-2">
        <label  for="titulo">Texto:</label>
       <textarea class="form_control " name="text_texto" id="texto" placeholder="Texto da noticia"  cols="40" rows="5" required></textarea>
    </div>

     {{-- autor da noticia --}}
    <div class="form_group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control"  id="autor" name="text_autor" placeholder="Autor" required>
    </div>

    {{-- visibilidade da noticia --}}
    <div class="form-group text-center">

            <input type="checkbox" name="check_visivel" checked>Notícia visivel
    </div>

    {{-- Botao --}}
    <div class="text-center">
        <button class="btn btn-dark" role="submit">Salvar</button>
    </div>

</form>



@endsection
