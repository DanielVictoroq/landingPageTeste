<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\VisitanteRequest;
use Illuminate\Support\Facades\Input;
use  App\Visitantee;
use Validator;
use Request;

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
