<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUserInterface;


class HomeController extends Controller
{
   public $EndUserInterface;

   public function __construct(EndUserInterface $EndUserInterface )
   {
        $this->EndUserInterface = $EndUserInterface ;
   }

    public function  index(){
       return $this->EndUserInterface->index();
    }
}

