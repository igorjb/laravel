<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Html\FormFacade;
use Illuminate\Html\HtmlFacade;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return View::make('postagem.lista');
    }

    public function getCadastrar()
    {
        return View::make('postagem.cadastrar');
    }

    public function postCadastrar()
    {
        return 'Adicionando o post...';
    }

    public function getEditar($id_postagem)
    {
        return "Editar a postagem {$id_postagem}";
    }

    public function getDeletar($id_postagem)
    {
        return "Deletar postagem {$id_postagem}";
    }

    public function MissingMethod($params = array()){
        return 'Nada encontrado. :-)';
    }

}
