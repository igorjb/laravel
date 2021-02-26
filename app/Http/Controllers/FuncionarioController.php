<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'nome' => 'required|max:255',
            'email' => 'required|max:255',
            'telefone' => 'required|numeric',
            'optin' => '');
        
        $messages = array(
            'nome.required' => 'Informe o nome do funcionário',
            'email.required' => 'Informe o email do funcionário',
            'telefone.required' => 'Informe o telefone do funcionário');
        
        $request['optin'] = isset($request['optin']);
      
        $data = $request->validate($rules, $messages);

        $funcionario = Funcionario::create($data);
        
        return redirect('/funcionarios')->with('completed', 'Funcionário adicionado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('update', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'nome' => 'required|max:255',
            'email' => 'required|max:255',
            'telefone' => 'required|numeric',
            'optin' => '');
        
        $messages = array(
            'nome.required' => 'Informe o nome do funcionário',
            'email.required' => 'Informe o email do funcionário',
            'telefone.required' => 'Informe o telefone do funcionário');
        
        $request['optin'] = isset($request['optin']);
      
        $data = $request->validate($rules, $messages);

        Funcionario::whereId($id)->update($data);

        return redirect('/funcionarios')->with('completed', 'Funcionário atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();

        return redirect('/funcionarios')->with('completed', 'Funcionário excluído!');
    }
}
