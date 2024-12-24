<?php

// namespace App\Http\Controllers\Auth;
// use App\Http\Controllers\Controller;
// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

// class AuthController extends Controller
// {
//     public function login(){
//         return view('Auth.login');
//     }
//     public function register(){
//         return view('Auth.register');
//     }
//     //اجرب اعمل دي في ال create
//     public function handleRegster(Request $request){
//         $data=$request->validate([
//             'email'=> 'email|required|unique:users,email',
//             'name'=>'required',
//             'password'=> 'required',
//         ]);
//         $data['password']=Hash::make($request->password);
//         $user= User::create($data);
//         Auth::login($user);
//     }
//     public function logout(){
//         Auth::logout();
//         return redirect()->route('Auth.login');
//     }
//     public function handlelogin(Request $request){
//         $data=$request->validate([
//             'email'=> 'email|required',
//             'password'=> 'required',
//         ]);
//         ///////////////////////////////////////////////////////
//         ///////////////////////////////////////////////////////////
//         $newLogin=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
//         if(!$newLogin){
//             return redirect()->back();
//         }
//         return redirect()->route('admin.index');
// }
// }





namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login');
    }

    public function register(){

        return view('Auth.register');
    }

    public function handleRegster(Request $request){
        $data=$request->validate([
            'email'=> 'email|required|unique:users', 
            'name'=>'required',
            'password'=> 'required',
        ]);
        $data['password']=Hash::make($request->password);
        $user= User::create($data);
        Auth::login($user);
        // Redirect to a success page or dashboard
        return redirect()->route('Auth.login'); 
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('Auth.login');
    }

    public function handlelogin(Request $request){
        $credentials = $request->only('email', 'password'); 

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index'); 
        }
dd("ok");
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }
}