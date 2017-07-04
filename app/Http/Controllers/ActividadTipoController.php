<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ActividadTipo;

class ActividadTipoController extends Controller
{
  public function index()
   {
       return  ActividadTipo::orderBy('id')->get();

   }
   public function show(Request $request, $id)
    {
        return  ActividadTipo::findOrFail($id);

    }
    public function create()
    {

       return response()
                ->json([
                    'form' => ActividadTipo::form(),
                    'option' => []
                ]);
    }
    public function store(Request $request)
    {
      /*  $v = \Validator::make($request->all(), Actividad::rules());

        if( $v->fails()){
           return response()->json( $v->errors() );
        }*/
        ActividadTipo::create($request->all());

           return response()
                ->json([

                    'saved' => true
                ]);
    }
    public function edit($id)
   {
        $ActividadTipo = ActividadTipo::findOrFail($id);



       return response()
               ->json([
                   'form' => $ActividadTipo,
                   'option' => []
               ]);
   }
    public function update(Request $request, $id)
     {
        //creo una variable
          $ActividadTipo=ActividadTipo::findOrFail($id);

          //$actividad->nombre=$request->nombre;
          //$actividad->descripcion=$request->descripcion;
            //devolver codigo estado
          /*if($actividad->save()){
              return response()->json(['OK'],200);
          }else{
              return response()->json(['Not found'],404);
          }*/
          $ActividadTipo->update($request->all());
          return response()
                  ->json([
                      'saved' => true

                  ]);


     }
     public function destroy($id)
    {
        $ActividadTipo = ActividadTipo::findOrFail($id);

        $actividad->delete();

         return response()
                ->json([
                    'deleted' => true
                ]);
    }

}
