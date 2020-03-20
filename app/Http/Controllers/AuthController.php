<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftar_user_;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\register;

class AuthController extends Controller
{
    public function getLogin()
    {   
        if(Session()->get('login')==FALSE)
        {
        return view('login');
        }
    }

    public function postLogin(Request $request)
    {

        $name = $request->name;
        $password = $request->password;
 

        $data = daftar_user_::where('name',$name)->first();
        if($data){ 
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('nama_user',$data->nama_user);
                Session::put('email',$data->email);
                Session::put('avatar',$data->avatar);
                Session::put('level',$data->level);
                Session::put('login',TRUE);
                return redirect()->route('dashboard_user');
            }
                else{
                    return redirect()->back()->with('alert','Password atau Email, Salah !');
                }
            
           }
    }

    public function getRegister()
    {
        if(Session()->get('login')==FALSE)
        {
        return view('register');
        }
        else
        {
        return redirect()->route('dashboard_user');
        }

    }

    public function postRegister(Request $request)
    {
        
    	register::create([
            'name'=> $request->name,
            'nama_user'=>$request->nama_user,
    		'email' => $request->email,
    		'password'=> bcrypt($request->password), 
            'level'=> '2',
            'avatar'=>'',
            'alamat'=>'',
            'telepon' =>''

    	]);

    	return redirect()->route('login');
    }

    public function LogoutUser()

    {
        Session::flush();
        return redirect()->route('login');
    }

}


