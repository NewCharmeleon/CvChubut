<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Actividad;

class ActividadEspecificaController extends Controller
{
  public function index()
   {
       return  ActividadEspecifica::orderBy('id')->get();

   }
   public function show(Request $request, $id)
    {
        return  ActividadEspecifica::findOrFail($id);

    }
    public function create()
    {

       return response()
                ->json([
                    'form' => ActividadEspecifica::form(),
                    'option' => []
                ]);
    }
    public function store(Request $request)
    {
      /*  $v = \Validator::make($request->all(), Actividad::rules());

        if( $v->fails()){
           return response()->json( $v->errors() );
        }*/
        ActividadEspecifica::create($request->all());

           return response()
                ->json([

                    'saved' => true
                ]);
    }
    public function edit($id)
   {
        $actividadEspecifica = ActividadEspecifica::findOrFail($id);



       return response()
               ->json([
                   'form' => $actividadEspecifica,
                   'option' => []
               ]);
   }
    public function update(Request $request, $id)
     {
        //creo una variable
          $actividadEspecifica=actividadEspecifica::findOrFail($id);

          //$actividad->nombre=$request->nombre;
          //$actividad->descripcion=$request->descripcion;
            //devolver codigo estado
          /*if($actividad->save()){
              return response()->json(['OK'],200);
          }else{
              return response()->json(['Not found'],404);
          }*/
          $actividadEspecifica->update($request->all());
          return response()
                  ->json([
                      'saved' => true

                  ]);


     }
     public function destroy($id)
    {
        $actividadEspecifica = actividadEspecifica::findOrFail($id);

        $actividad->delete();

         return response()
                ->json([
                    'deleted' => true
                ]);
    }

}
