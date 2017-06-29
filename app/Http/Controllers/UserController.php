<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\User;

class UserController extends Controller
{
  public function index()
   {
       return  User::orderBy('id')->get();

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
        $user = User::findOrFail($id);



       return response()
               ->json([
                   'form' => $user,
                   'option' => []
               ]);
   }
    public function update(Request $request, $id)
     {
        //creo una variable
          $user=User::findOrFail($id);
          $user->update($request->all());
          return response()
                  ->json([
                      'saved' => true

                  ]);


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
