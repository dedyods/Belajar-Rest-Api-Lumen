<?php




namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // public function __construct(UserRepositoryEloquent $userRepository)
    // {
    //     $this->middleware('auth:api',['except'=>['login','register']]);
    // }

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(RegisterRequest $request)
    {

        $data = $request->all();
        $data['password'] = Hash::make($request->get('password'));

        return User::create($data);
    }

    public function login(LoginRequest $request)
    {
        //    Cek email dan password
        $cekLogin = $request->only('email', 'password');

        // dd($credentials);
        if (!$token = auth()->attempt($cekLogin)) {

        //response login "failed"
            return response()->json([
                'success' => false,
                'message' => 'Login Failed !!'
            ], 401);
        }

        return response()->json([
            'success' => true,
            'user'    => auth()->user(),
            'token'   => $token,

        ], 200);
    }
}
