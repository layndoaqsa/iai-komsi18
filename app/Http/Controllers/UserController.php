<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
Use App\Lib\Helper;


class UserController extends Controller
{
    public function store(Request $request){
      $result = User::create([
        'nama' => $request->nama,
        'niu' => $request->niu,
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

  public function uploadAva(Request $request, $niu){
      $data = User::where('niu',$niu)->first();
      $response = null;
      $user = (object) ['image' => ""];

      if ($request->hasFile('image')) {
          $original_filename = $request->file('image')->getClientOriginalName();
          $original_filename_arr = explode('.', $original_filename);
          $file_ext = end($original_filename_arr);
          $destination_path = '.';
          $image = 'U-' . time() . '.' . $file_ext;

          if ($request->file('image')->move($destination_path, $image)) {
              $user->image = '/upload/user/' . $image;
              return $this->responseRequestSuccess($user);
          } else {
              return $this->responseRequestError('Cannot upload file');
          }
      } else {
          return $this->responseRequestError('File not found');
      }
  }
}
