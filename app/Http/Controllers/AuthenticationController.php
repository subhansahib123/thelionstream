<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{
    public function signup(){
        return view('admin.register');
    }
    public function signin(){
        return view('admin.login');
    }

    public function signup_store(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);
        if ($validator->fails()) {

            $obj = ["Status" => false, "success" => 0, "errors" => $validator->errors()];
            dd($validator->errors());
            return response()->back($obj);
        }
        $user = new User([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->save();
        return view('sign-in')->with('success','Please login ,you have successfully signed up.');

    }
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        if ($validator->fails()) {

            $obj = ["Status" => false, "success" => 0, "errors" => $validator->errors()];
            return response()->back($obj);
        }
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials))
        dd('Credential not found');
            // return response()->back([
            //     'msg' => 'Invalid Email or Password',"Status" => false, "success" => 0,
            // ]);

        return response()->json('logged in successfully');


    }
}
