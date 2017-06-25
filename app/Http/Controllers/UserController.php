<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
  public function index()
   {
       return  User::orderBy('name')->get();

   }
   public function show(Request $request, $id)
    {
        return  User::findOrFail($id);

    }
    public function create()
    {

       return response()
                ->json([
                    'form' => User::form(),
                    'option' => []
                ]);
    }
    public function store(Request $request)
    {
      /*  $v = \Validator::make($request->all(), Actividad::rules());

        if( $v->fails()){
           return response()->json( $v->errors() );
        }*/
        User::create($request->all());

           return response()
                ->json([

                    'saved' => true
                ]);
    }
    public function edit($id)
   {
        $user = User::find($id);



       return response()
               ->json([
                   'form' => $user,
                   'option' => []
               ]);
   }
    public function update(Request $request, $id)
     {
        //creo una variable
          $user=User::find($id);
          $user->name=$request->name;
          $user->email=$request->email;
            //devolver codigo estado
          if($user->save()){
              return response()->json(['OK'],200);
          }else{
              return response()->json(['Not found'],404);
          }


     }
     public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

         return response()
                ->json([
                    'deleted' => true
                ]);
    }

}
