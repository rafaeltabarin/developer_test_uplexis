<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    	public function index(){
		$usuarios = Usuario::all();
		return view('usuarios.index',['usuarios' => $usuarios ]);
	}

	public function create(){
		return view('usuarios.create');
	}

	public function store(UsuarioRequest $request){
		$input = $request->all();
		Usuario::create($input);

		return redirect()->route('usuarios');
	}

	public function destroy($id){
		$usuario = Usuario::find($id)->delete();
		
		return redirect()->route('usuarios');
	}

	public function edit($id){
		$usuario = Usuario::find($id);

		return view('usuarios.edit', compact('usuario'));
	}

	public function update(UsuarioRequest $request, $id){
		$usuario = Usuario::find($id)->update($request->all());
		
		return redirect()->route('usuarios');
	}
}
