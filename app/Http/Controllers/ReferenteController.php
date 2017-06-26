<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Referente;

class ReferenteController extends Controller
{
  public function index()
{
    return  Referente::orderBy('id')->get();

}
public function show(Request $request, $id)
 {
     return  Referente::findOrFail($id);

 }
 public function create()
 {

    return response()
             ->json([
                 'form' => Referente::form(),
                 'option' => []
             ]);
 }
 public function store(Request $request)
 {
   /*  $v = \Validator::make($request->all(), Actividad::rules());

     if( $v->fails()){
        return response()->json( $v->errors() );
     }*/
     Referente::create($request->all());

        return response()
             ->json([

                 'saved' => true
             ]);
 }
 public function edit($id)
{
     $referente = Referente::find($id);



    return response()
            ->json([
                'form' => $referente,
                'option' => []
            ]);
}
 public function update(Request $request, $id)
  {
     //creo una variable
       $referente=Referente::find($id);
       $referente->persona=$request->persona;
       $referente->rol=$request->rol;
         //devolver codigo estado
       if($referente->save()){
           return response()->json(['OK'],200);
       }else{
           return response()->json(['Not found'],404);
       }


  }
  public function destroy($id)
 {
     $referente = Referente::findOrFail($id);

     $referente->delete();

      return response()
             ->json([
                 'deleted' => true
             ]);
 }

}

}
