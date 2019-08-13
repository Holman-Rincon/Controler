<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\Sede;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Request\SedeFormRequest;
use DB;

class SedeController extends Controller
{
	    public function __construct()
	 	{

	 	} 
	 	public function index(Request $request){
	 		if ($request) {
	 			$query=trim($request->get('searchText'));
	 			$sedes=DB::table('sede')->where('nombre_sede','LIKE', '%'.$query.'%');
	 			return view('almacen.sede.index',["sedes"=>$sedes,"searchText"=>$query]);
	 		}
	 	}

	 	public function create(){
	 		return ("almacen.sede.create");
	 	}

	 	public function store(SedeFormRequest $request){
	 		$sede = new Sede;
	 		$sede->nombre_sede=$request->get('nombre_sede');
	 		$sede->ciudad=$request->get('ciudad');
	 		$sede->descripcion=$request->get('descripcion');
	 		$sede->save();
	 		return Redirect::to('almacen/sede');
	 	}

	 	public function show($id){
	 		return view("almacen.sede.show",["sede"=>Sede::findOrFail($id)]);
	 	}

	 	public function edit($id){
	 		return view("almacen.sede.edit",["sede"=>Sede::findOrFail($id)]);
	 	}

	 	public function update(SedeFormRequest $request,$id){
	 		$sede=Sede::findOrFail($id);
			$sede->nombre_sede=$request->get('nombre_sede');
			$sede->ciudad=$request->get('ciudad');
	 		$sede->descripcion=$request->get('descripcion');
	 		$sede->update();
	 		return Redirect::to('almacen/sede');
	 	}

	 	public function destroy($id){
	 		$sede=Sede::findOrFail($id);
	 		$sede->update();
	 		return Redirect::to('almacen/sede');
	 	}
}
