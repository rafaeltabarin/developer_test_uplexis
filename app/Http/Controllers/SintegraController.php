<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sintegra;
use App\Usuario;
use App\Http\Requests\SintegraRequest;

class SintegraController extends Controller
{
    	public function index(){
		$sintegra = Sintegra::all();
		return view('sintegra.index',['sintegra' => $sintegra ]);
	}

	public function create(){
		$usuarios = Usuario::lists('usuario', 'id');

		return view('sintegra.create', compact('id', 'usuarios'));
	}

	public function store(SintegraRequest $request){
		$input = $request->all();
		Sintegra::create($input);

		return redirect()->route('sintegra');
	}

	public function destroy($id){
		$sintegra = Sintegra::find($id)->delete();
		
		return redirect()->route('sintegra');
	}

	public function edit($id){
		$sintegra = Sintegra::find($id);
		$usuarios = Usuario::lists('usuario', 'id');

		return view('sintegra.edit', compact('sintegra', 'id', 'usuarios'));
	}

	public function update(SintegraRequest $request, $id){
		$sintegra = Sintegra::find($id)->update($request->all());
		
		return redirect()->route('sintegra');
	}
}
