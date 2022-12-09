<?php

namespace App\Http\Repositories\AdminRepositories;

use App\Http\Interfaces\AdminInterfaces\AdminHomeInterface;

class AdminHomeRepository implements AdminHomeInterface
{
    public function index()
    {
        return view('Admin.index');
    }
}
