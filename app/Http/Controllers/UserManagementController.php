<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function AddUser(){
        $countries=Country::all();
        $users=User::all();
        return view('admin.add_user',compact('countries','users'));
    }
    public function StoreUser(Request $request ){
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
            'email'=>'required|string|email',
            'name'=>'required|string',
            'phone'=>'required|string',
            'address'=>'required|string',
            'country'=>'required|string',
            'sponsor'=>'required|string',

        ]);
        if ($validator->fails()) {


            return back()
            ->withInput()
            ->withErrors($validator->errors());
        }
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username'=>$request->username,
            'phone'=>$request->phone,
            'city'=>$request->address,
            'country'=>$request->country,
            'parent'=>$request->sponsor,
            'sponsor'=>$request->sponsor
        ]);
        if($user->save()){
            $msg=['message'=>"Successfully Registered Account !"];
            return back()->with($msg);
        }else {
            $msg=['error'=>"Internal Server Error Please Try Again Later!"];
            return back()->with($msg);
        }
    }


    public function ActiveUser(){
        return view('admin.active_user');
    }
}
