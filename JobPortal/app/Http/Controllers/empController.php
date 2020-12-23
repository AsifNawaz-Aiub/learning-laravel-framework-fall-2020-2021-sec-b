<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;

class empController extends Controller
{
    public function index(){
    	return view('employee.index');
    }
    public function register(){
    	return view('admin.register');
    }
    public function registerPost(userRequest $req){

        $user = new User();

        $user->username     = $req->username;
        $user->password     = $req->password;
        $user->usertype     = $req->type;
        $user->email        = $req->email;
        $user->name         = $req->name;
        $user->companyname  = $req->cname;
        $user->contactno    = $req->cno;

        if($user->save()){
            return redirect('/admin');
        }else{
            echo "error";
        }
    	
    }

    public function show($id){
    	
        $user = User::find($id);
    	return view('admin.show', $user);
    }

    
    public function emplist(){
    	//$students = $this->getStudentlist();

        $users = User::all();
    	return view('admin.emplist')->with('users', $users);
    }

    public function edit($id){
    	
        $user = User::find($id);
    	return view('admin.edit', $user);
    }

    public function update($id, Request $req){
    	   
        $user = User::find($id);

        $user->username = $req->username;
        $user->password = $req->password;
        $user->usertype = $req->usertype;
        $user->email    = $req->email;
        $user->name    = $req->name;
        $user->companyname    = $req->cname;
        $user->contactno    = $req->cno;
        $user->save();

    	return redirect()->route('emp.list');
    }

    public function destroy($id,Request $req){


        $user = User::find($id);

        $user->delete();

        return redirect()->route('emp.list');
    }

    public function delete($id,Request $req){
        
        $user = User::find($id);
    	return view('admin.delete', $user);
    }


    
}
