<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet" >

    <title>NewsApp</title>
  </head>
  <body>
    <div class="container">

  {{-- cabeçaclho e navegação --}}
  @include('layouts.nav')
  {{-- conteudo --}}
  @yield('conteudo')


  {{-- radapé --}}
  @include('layouts.rodape')


</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src={{asset("js/popper.min.js")}}></script>
    <script src={{asset("js/bootstrap.min.js")}}></script>

  </body>
</html>
