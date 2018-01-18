<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use  App\Visitantee;
class VisitanteController extends Controller
{
     public function index()
      {
          return view('visitante');
	  }

    public function adicionar(UsuarioRequest $request){
        Usuario::create($request->all());
        return redirect()->back()->with('data', ['success']);
    }
}
?>
