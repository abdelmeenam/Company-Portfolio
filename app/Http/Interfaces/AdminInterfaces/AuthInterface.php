<?php
namespace App\Http\Interfaces\AdminInterfaces;


interface AuthInterface
{
    public function loginPage();
    public function login($request);
    public function logout();
}
