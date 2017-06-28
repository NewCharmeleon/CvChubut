<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Estudiante;

class EstudianteController extends Controller
{
  public function index()
  {
      return  Estudiante::orderBy('id')->get();

  }
  public function show(Request $request, $id)
   {
       return  Estudiante::findOrFail($id);

   }
   public function create()
   {

      return response()
               ->json([
                   'form' => Estudiante::form(),
                   'option' => []
               ]);
   }
   public function store(Request $request)
   {
     /*  $v = \Validator::make($request->all(), Actividad::rules());

       if( $v->fails()){
          return response()->json( $v->errors() );
       }*/
       Estudiante::create($request->all());

          return response()
               ->json([

                   'saved' => true
               ]);
   }
   public function edit($id)
  {
       $estudiante = Estudiante::find($id);



      return response()
              ->json([
                  'form' => $estudiante,
                  'option' => []
              ]);
  }
   public function update(Request $request, $id)
    {
       //creo una variable
         $estudiante=Estudiante::find($id);
         $estudiante->update($request->all());
         return response()
                 ->json([
                     'saved' => true
                     
                 ]);
         /*$estudiante->persona=$request->persona;
         $estudiante->rol=$request->rol;
         $estudiante->carrera=$request->carrera;
           //devolver codigo estado
         if($estudiante->save()){
             return response()->json(['OK'],200);
         }else{
             return response()->json(['Not found'],404);
         }*/


    }
    public function destroy($id)
   {
       $estudiante = Estudiante::findOrFail($id);

       $estudiante->delete();

        return response()
               ->json([
                   'deleted' => true
               ]);
   }

}
