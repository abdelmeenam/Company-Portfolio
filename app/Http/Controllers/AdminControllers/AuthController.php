<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterfaces\AuthInterface;
use App\Http\Requests\Auth\LoginRequest;


class AuthController extends Controller
{

    public $AuthInterface;

    public function __construct(AuthInterface $AuthInterface){
        $this->AuthInterface = $AuthInterface;
    }

    public function loginPage(){
        return $this->AuthInterface->loginPage();
    }

    public function login(LoginRequest $request){
        return $this->AuthInterface->login($request);
    }

    public function logout(){
        return $this->AuthInterface->logout();
    }
}
