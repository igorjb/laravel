<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Html\FormFacade;
use Illuminate\Html\HtmlFacade;
use App\PostagemDados;
use Input;
use Redirect;
use DB;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $postagens = PostagemDados::get();

        return View::make('postagem.lista', compact('postagens'));
    }

    public function getCadastrar()
    {
        return View::make('postagem.new-edit');
    }

    public function postCadastrar()
    {
        $postagem = new PostagemDados();
        $postagem->titulo = Input::get('titulo');
        $postagem->conteudo = Input::get('conteudo');
        $postagem->save();

        return Redirect::to('postagem');
    }

    public function getEditar($id_postagem)
    {
        $postagem = PostagemDados::find($id_postagem);

        return View::make('postagem.new-edit', compact('postagem'));
    }

    public function postEditar($id_postagem)
    {
        $postagem = PostagemDados::find($id_postagem);
        $postagem->titulo = Input::get('titulo');
        $postagem->conteudo = Input::get('conteudo');
        $postagem->save();

        return Redirect::to('postagem');
    }

    public function getDeletar($id_postagem)
    {
        $postagem = PostagemDados::find($id_postagem);
        $postagem->delete();

        return Redirect::to('postagem');
    }

    public function MissingMethod($params = array()){
        return 'Nada encontrado. :-)';
    }

}
