<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        return 'Listando as postagens ';
    }

    public function getAdicionar()
    {
        return 'Adicionar postagem';
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
