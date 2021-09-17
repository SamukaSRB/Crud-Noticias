<div class="row">

<div class="col-md-6">
    <strong>{{$dados->titulo}}</strong>
</div>

<div class="col-md-3">
  {{$dados->autor}}
</div>



<div class="col-md-3 text-right">

    @if($dados->visivel == 1 )

        <a href="/colocar_invisivel/{{$dados->id_noticias}}">
            <i class="fas fa-eye p-1"></i>
        </a>

    @else
        <a href="/colocar_visivel/{{$dados->id_noticias}}">
            <i class="fas fa-eye-slash p-1"></i>
        </a>

    @endif

    <a href="editar_noticias/{{ $dados->id_noticias }}">
        <i class="fas fa-pencil-alt p-1"></i>
    </a>

    <a href="eliminar_noticias/{{ $dados->id_noticias }}">
        <i class="fas fa-trash p-1"></i>
    </a>

</div>

</div>
