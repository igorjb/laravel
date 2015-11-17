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
use Validator;
class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $rules = array('titulo' => 'required|min:3|max:100', 'conteudo' => 'required|min:5|max:500');

    public function getIndex()
    {
        $postagens = PostagemDados::get();

        $titulo = 'Listagem das postagens - EspecializaTi';

        return View::make('postagem.lista', compact('postagens', 'titulo'));
    }

    public function getCadastrar()
    {
        $titulo = 'Adicionar Nova Postagem - EspecializaTi';

        $tituloMostra = 'Adicionar nova postagem';

        return View::make('postagem.new-edit', compact('titulo', 'tituloMostra'));
    }

    public function postCadastrar()
    {
        $dadosFormulario = Input::all();
        
        $validator = Validator::make($dadosFormulario, $this->rules);

        if ($validator->fails()) {
            return Redirect::to('postagem/cadastrar')
                    ->withErrors($validator)
                    ->withInput();
        }

        $postagem = new PostagemDados($dadosFormulario);
        $postagem->save();

        return Redirect::to('postagem');
    }

    public function getEditar($id_postagem)
    {

        $postagem = PostagemDados::find($id_postagem);

        $titulo = 'Editar postagem - EspecializaTi';

        $tituloMostra = 'Editar a postagem';

        return View::make('postagem.new-edit', compact('postagem', 'titulo', 'tituloMostra'));
    }

    public function postEditar($id_postagem)
    {
        $dadosFormulario = Input::all();
        
        $validator = Validator::make($dadosFormulario, $this->rules);

        if ($validator->fails()) {
            return Redirect::to("postagem/editar/{$id_postagem}")
                    ->withErrors($validator)
                    ->withInput();
        }

        $postagem = PostagemDados::find($id_postagem);
        $postagem->__construct($dadosFormulario);
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
