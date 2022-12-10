<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterfaces\AdminHomeInterface;

class AdminHomeController extends Controller
{
    public $AdminHomeInterface;
    public function __construct(AdminHomeInterface $AdminHomeInterface)
    {
          $this->AdminHomeInterface = $AdminHomeInterface;
    }

    public function index()
    {
        return $this->AdminHomeInterface->index();
    }
}
