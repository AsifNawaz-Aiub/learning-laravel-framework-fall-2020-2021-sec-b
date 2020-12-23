<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;

class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }
   


    public function verify(Request $req){

    
        $user  = User::where('username', $req->username)
                        ->where('password', $req->password)
                        ->first();
   

    	if($user){

            $req->session()->put('username', $req->username);
            $req->session()->put('type', $req->usertype);

            if(  $req->username == 'admin')
              {
                return redirect('/admin');
            }
              else{
                return redirect('/employee');
              }
    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    	}
    }
}
