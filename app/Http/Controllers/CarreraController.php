<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Carrera;

class CarreraController extends Controller
{
  public function index()
   {
       return  Carrera::orderBy('id')->get();

   }
   public function show(Request $request, $id)
    {
        return  Carrera::findOrFail($id);

    }
    public function create()
    {

       return response()
                ->json([
                    'form' => Carrera::form(),
                    'option' => []
                ]);
    }
    public function store(Request $request)
    {
      /*  $v = \Validator::make($request->all(), Actividad::rules());

        if( $v->fails()){
           return response()->json( $v->errors() );
        }*/
        Carrera::create($request->all());

           return response()
                ->json([

                    'saved' => true
                ]);
    }
    public function edit($id)
   {
        $carrera = Carrera::findOrFail($id);



       return response()
               ->json([
                   'form' => $carrera,
                   'option' => []
               ]);
   }
    public function update(Request $request, $id)
     {
        //creo una variable
          $carrera=Carrera::findOrFail($id);

          //$actividad->nombre=$request->nombre;
          //$actividad->descripcion=$request->descripcion;
            //devolver codigo estado
          /*if($actividad->save()){
              return response()->json(['OK'],200);
          }else{
              return response()->json(['Not found'],404);
          }*/
          $carrera->update($request->all());
          return response()
                  ->json([
                      'saved' => true

                  ]);


     }
     public function destroy($id)
    {
        $carrera = Carrera::findOrFail($id);

        $carrera->delete();

         return response()
                ->json([
                    'deleted' => true
                ]);
    }
}
