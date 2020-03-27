<?php
namespace App\Http\Controllers;
use Validator;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Firebase\JWT\ExpiredException;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\KeyController;
use Laravel\Lumen\Routing\Controller as BaseController;
class AuthController extends BaseController
{
    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Request
     */
    private $request;
    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }
    /**
     * Create a new token.
     *
     * @param  \App\User   $user
     * @return string
     */
    protected function jwt(User $user) {
        $payload = [
            'iss' => "lumen-jwt", // Issuer of the token
            'sub' => $user->id, // Subject of the token
            'iat' => time(), // Time when JWT was issued.
            'exp' => time() + 60*60 // Expiration time
        ];

        // As you can see we are passing `JWT_SECRET` as the second parameter that will
        // be used to decode the token in the future.
        return JWT::encode($payload, env('JWT_SECRET'));
    }
    /**
     * Authenticate a user and return the token if the provided credentials are correct.
     *
     * @param  \App\User   $user
     * @return mixed
     */
    public function authenticate(User $user) {
        $this->validate($this->request, [
            'niu'     => 'required',
            'password'  => 'required'
        ]);
        // Find the user by email
        $user = User::where('niu', $this->request->input('niu'))->first();
        if (!$user) {
            // You wil probably have some sort of helpers or whatever
            // to make sure that you have the same response format for
            // differents kind of responses. But let's return the
            // below respose for now.
            return response()->json([
                'error' => 'Niu does not exist.'
            ], 400);
        }
        // Verify the password and generate the token
        if (Hash::check($this->request->input('password'), $user->password)) {
            $key = (new KeyController)->my_simple_crypt($this->request->input('niu'));
            return response()->json([
                'message' => 'Halo, '.$user->nama.'!',
                'task' => 'Akses endpoint '.url('api/tugas/'.$key).' dengan method GET untuk melihat taskmu ya, jangan lupa gunakan token yang sudah digenerate',
                'token' => $this->jwt($user),
            ], 200);
        }
        // Bad Request response
        return response()->json([
            'error' => 'Niu or password is wrong.'
        ], 400);
    }
}
