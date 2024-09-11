<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function signin(Request $request){

        //dd($request->all());
        if(Auth::user()){
            return redirect('/');
        }
        else{
            if($request->isMethod('post')){
                $rules = array(
                    'email'    => 'required',
                    'password' => 'required',
                );
                $validator = Validator::make($request->all(), $rules)->validate();
            
                if (Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])) {
                    return redirect('/add-file');
                }
                else{
                    return redirect('signin')
                                    ->withErrors(['Invalid Credentials'])
                                    ->withInput();
                }
            }
            else{
                return view('frontend/signin');
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/signin');
    }
}
