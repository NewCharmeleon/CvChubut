<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\User;
//use App\Role;

class UserController extends Controller
{
  //$role=Role::findOrFail('display_name');
  public function index()
   {
     //$listaRoles = New Role::all();//->'display_name';
      //$Roles = User::with('Roles')->get();
    //  with(['listaTRoles'=>$listaTRoles]
      //$display_name = Role->display_name;
       return  User::with('roles')->get()->toJson();
      // return  User::all()->load(['display_name' => $listaRoles]);

   }
   public function show(Request $request, $id)
    {

        return  User::with('roles')->findOrFail($id);

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
        $user = User::with('roles')->findOrFail($id);



       return response()
               ->json([
                   'form' => $user,
                   'option' => []
               ]);
   }
    public function update(Request $request, $id)
     {
        //creo una variable
          $user=User::with('roles')->findOrFail($id);
          $user->update($request->all());
          return response()
                  ->json([
                      'saved' => true

                  ]);


     }
     public function destroy($id)
    {
        $user = User::with('roles')->findOrFail($id);

        $user->delete();

         return response()
                ->json([
                    'deleted' => true
                ]);
    }

}
