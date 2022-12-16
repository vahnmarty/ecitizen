<?php

namespace App\Http\Controllers\Api;

use Hash;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('login');
                return ['token' => $token->plainTextToken];
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User does not exist'];
            return response($response, 422);
        }
    }

    public function phoneRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|unique:users,phone',
        ]);

        $digits = 6;
        $code = rand(pow(10, $digits-1), pow(10, $digits)-1);

        $user = User::wherePhone($request->phone)->first();

        if(!$user){
            $user = new User;
            $user->phone = $request->phone;
            $user->verification_code = $code;
            $user->save();
        }else{
            $user->verification_code = $code;
            $user->save();
        }
        

        return [
            'success' => true,
            'data' => [
                'code' => $user->verification_code
            ]
        ];
    }

    public function verify(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'code' => 'required',
        ]);


        $user = User::wherePhone($request->phone)->first();

        if($user){
            if($user->verification_code == $request->code)
            {
                $user->phone_verified_at = now();
                $user->verification_code = null;
                $user->save();

                $token = $user->createToken('auth');

                return [
                    'success' => true,
                    'data' => [
                        'phone_verified_at' => $user->phone_verified_at,
                        'token' => $token->plainTextToken
                    ]
                ];
            }else{
                return [
                    'success' => false,
                    'message' => 'Invalid'
                ];
            }
        }

        return [
            'success' => false,
            'message' => 'User not found'
        ];
        
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'nullable|email',
            'password' => ['required', 'confirmed', Password::defaults()]
        ]);

        $user = $request->user();

        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();

        return [
            'success' => true,
            'data' => $user,
        ];
    }
}
