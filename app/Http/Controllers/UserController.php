<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    
  public function index(){
    return User::all(); //R
  }
  
  public function show($id){
    return User::find($id); //R
  }
  
  public function create(Request $request){
    $user = new User();
        if($request->name != null){$user->name = $request->name;}
        if($request->email != null){$user->email = $request->email;}
        if($request->password != null){$user->password = $request->password;}
    
    $user->save(); //C
    return $user;
    
  }
  
  public function update($id, Request $request){
    $user = User::find($id);
    $user->email = $request->email;
    
    $user->save(); //U
    return $user;
    
  }
  
  public function delete($id){
    User::find($id)->delete(); // D
  }
}

