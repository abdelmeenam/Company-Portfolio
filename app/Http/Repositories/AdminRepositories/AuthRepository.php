<?php

namespace App\Http\Repositories\AdminRepositories;

use App\Http\Interfaces\AdminInterfaces\AuthInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthRepository implements AuthInterface
{
    public function loginPage(){
        return view('admin.login');
    }

    public function login($request){
        $credentials = $request->only('email' ,'password');
        if (Auth::attempt($credentials)){
            return redirect(route('admin.index'));
        }
        Alert::error('Error', 'user is not found');
        return redirect()->back() ;
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('admin.login'));
    }
}
