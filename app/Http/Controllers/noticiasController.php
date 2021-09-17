<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{

    public function index()
    {
        //vai buscar  todas as noticias

        $dados = noticias::all();

         return view('noticias_index',compact('dados'));
    }

    public function apresentarTabelaGestao(){
        //carregar todas as noticias visiveis oou invisiveis

        $noticia = noticias::all();
        return view('noticias_gestao',compact('noticia'));
    }


    public function create()
    {
        //apresentar  a página como o formulario criação de novas noticias
        return view('noticias_create');
    }


    public function store(Request $request)
    {
        //gravação de uma nova noticias na base de dados

         $noticia = new noticias;
         $noticia->titulo = $request->text_titulo;
         $noticia->texto = $request->text_texto;
         $noticia->autor = $request->text_autor;
         //Visibilidade
         if(isset($request->check_visivel)){
             $noticia->visivel = 1;
         }else{
             $noticia->visivel = 0;
         }
         $noticia->save();


        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //Apresentar um formulario para editar uma noticia
        //(pressupoem  a apresentação  dos dados da noticia no formulario)

        $noticia = noticias::find($id);
        return view('noticias_edit',compact('noticia'));
    }


    public function update(Request $request, $id)
    {
        //Atualização dos dados das noticias
        $noticia = noticias::find($id);
        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;
        //Visibilidade
        if(isset($request->check_visivel)){
            $noticia->visivel = 1;
        }else{
            $noticia->visivel = 0;
        }
        $noticia->update();
        return redirect('/gerir_noticias');




    }


    public function destroy($id)
    {
       noticias::destroy($id);
       return redirect('/gerir_noticias');
    }

    public function colocarVisivel($id){

        $noticia = noticias::find($id);
        $noticia->visivel = 1 ;
        $noticia->save();
        return redirect('/gerir_noticias');
    }

    public function colocarInvisivel($id){
        $noticia = noticias::find($id);
        $noticia->visivel = 0 ;
        $noticia->save();
        return redirect('/gerir_noticias');
    }
}
