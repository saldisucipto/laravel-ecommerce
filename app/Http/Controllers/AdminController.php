<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AdminController extends Controller
{
    //index function 
    public function index(Request $request){
        if($request->isMethod('POST')){
            $data = $request->all();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])){
              return  \redirect('/dashboard');
            }else{
        return \redirect('/admin')->with('pesan_flash_error', 'Password Dan Email Anda Salah!');
                
            };
        }
        return \view('login');
    }


    // home function 
    public function home(){
        return view('backend.home.index');
    }

    // logout 
    public function logout(Request $request){
        $request->session()->flush();
        return \redirect('/admin')->with('pesan_flash_sukses', 'Berhasil Logout');
    }
}
