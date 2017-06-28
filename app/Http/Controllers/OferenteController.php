<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Oferente;
class OferenteController extends Controller
{
  public function index()
 {
     return  Oferente::orderBy('id')->get();

 }
 public function show(Request $request, $id)
  {
      return  Oferente::findOrFail($id);

  }
  public function create()
  {

     return response()
              ->json([
                  'form' => Oferente::form(),
                  'option' => []
              ]);
  }
  public function store(Request $request)
  {
    /*  $v = \Validator::make($request->all(), Actividad::rules());

      if( $v->fails()){
         return response()->json( $v->errors() );
      }*/
      Oferente::create($request->all());

         return response()
              ->json([

                  'saved' => true
              ]);
  }
  public function edit($id)
 {
      $oferente = Oferente::find($id);



     return response()
             ->json([
                 'form' => $oferente,
                 'option' => []
             ]);
 }
  public function update(Request $request, $id)
   {
      //creo una variable
        $oferente=Oferente::findOrFail($id);
      /*  $oferente->persona=$request->persona;
        $oferente->rol=$request->rol;
          //devolver codigo estado
        if($oferente->save()){
            return response()->json(['OK'],200);
        }else{
            return response()->json(['Not found'],404);
        }*/
        $actividad->update($request->all());
        return response()
                ->json([
                    'saved' => true
                    
                ]);


   }
   public function destroy($id)
  {
      $oferente = Oferente::findOrFail($id);

      $oferente->delete();

       return response()
              ->json([
                  'deleted' => true
              ]);
  }

}
