<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;

class HomeController extends Controller
{
    public function  index(){
        $services = Service::get();
        $portfolios =Portfolio::get();
        $abouts =About::get();
        $teams =Team::get();
        return view('User.index', compact(['services' , 'portfolios' ,'abouts' ,'teams']));

    }
}
