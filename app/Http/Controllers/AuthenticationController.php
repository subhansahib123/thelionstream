<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{
    public function signup($sponsur){
        $parent=User::where('username',$sponsur)->first();
        if($parent){
            $countries=Country::all();
            return view('admin.register',compact('parent','countries'));
        }
        $msg="No User Found With This Username or Link";
        return view('admin.register',compact('msg'));
    }
    public function signin(){
        return view('admin.login');
    }

    public function signup_store(Request $request){

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username'=>$request->username,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'country'=>$request->country,
            'parent_id'=>$request->sponsor
        ]);
        if($user->save()){
            $msg=['result'=>1,'message'=>"Successfully Registered Account !"];
            return response()->json($msg);
        }else {
            $msg=['result'=>0,'message'=>"Internal Server Error Please Try Again Later!"];
            return response()->json($msg);
        }


    }
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
        if ($validator->fails()) {

            $obj = ["Status" => false, "success" => 0, "errors" => $validator->errors()];
            return response()->back($obj);
        }
        $credentials = request(['username', 'password']);
        if (!Auth::attempt($credentials))
            return redirect()->back()->withErrors(['msg' => 'Username or Password Did not Matched']);


        return redirect()->route('dashboard');


    }
    public function checkEmailUsername(Request $request){
        if($request->has('email')){
            if(User::where('email',$request->email)->exists()){
                $msg=['error'=>"Email Taken Already Please Choose Different Email !"];
                return response()->json( $msg);
            }else {
                $msg=['msg'=>"Available !"];
                return response()->json( $msg);
            }
        }
        else if($request->has('username')){
            if(User::where('username',$request->username)->exists()){
                $msg=['error'=>"Username Taken Already Please Choose Different Email !"];
                return response()->json( $msg);
            }else {
                $msg=['msg'=>"Available !"];
                return response()->json( $msg);
            }
        }
    }
}
