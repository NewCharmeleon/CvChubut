<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Actividad;

class ActividadController extends Controller
{
  public function index()
   {
       return  Actividad::orderBy('id')->get();

   }
   public function show(Request $request, $id)
    {
        return  Actividad::findOrFail($id);

    }
    public function create()
    {

       return response()
                ->json([
                    'form' => Actividad::form(),
                    'option' => []
                ]);
    }
    public function store(Request $request)
    {
      /*  $v = \Validator::make($request->all(), Actividad::rules());

        if( $v->fails()){
           return response()->json( $v->errors() );
        }*/
        Actividad::create($request->all());

           return response()
                ->json([

                    'saved' => true
                ]);
    }
    public function edit($id)
   {
        $actividad = Actividad::findOrFail($id);



       return response()
               ->json([
                   'form' => $actividad,
                   'option' => []
               ]);
   }
    public function update(Request $request, $id)
     {
        //creo una variable
          $actividad=Actividad::findOrFail($id);

          //$actividad->nombre=$request->nombre;
          //$actividad->descripcion=$request->descripcion;
            //devolver codigo estado
          /*if($actividad->save()){
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
        $actividad = Actividad::findOrFail($id);

        $actividad->delete();

         return response()
                ->json([
                    'deleted' => true
                ]);
    }

}
