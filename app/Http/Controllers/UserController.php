<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request){
      $result = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password'=> app('hash')->make($request->password)
      ]);

      if($result){
            $data['code'] = 200;
            $data['result'] = $result;
      }else{
          $data['code'] = 500;
          $data['result'] = 'Error';
      }
      return response($data);

    }
}
