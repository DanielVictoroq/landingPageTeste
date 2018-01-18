<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\VisitanteRequest;
use Illuminate\Support\Facades\Input;
use  App\Visitantee;

class VisitanteController extends Controller
{
     public function index()
      {
          return view('visitante');
	  }

        public function inserir(VisitanteRequest $request){
            Visitantee::create($request->all());
            return redirect()->back()->with('data', ['success']);
        }
}
?>
