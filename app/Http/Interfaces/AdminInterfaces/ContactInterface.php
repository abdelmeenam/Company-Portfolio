<?php
namespace App\Http\Interfaces\AdminInterfaces;


interface ContactInterface
{
    public function index();
    public function delete($request);
    public function sendMessage( $request);
    }
