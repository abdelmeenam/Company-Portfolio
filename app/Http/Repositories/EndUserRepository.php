<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\EndUserInterface;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;

class EndUserRepository implements EndUserInterface{

    public function index()
    {
        // TODO: Implement index() method.
        $services = Service::get();
        $portfolios =Portfolio::get();
        $abouts =About::get();
        $teams =Team::get();
        return view('User.index', compact(['services' , 'portfolios' ,'abouts' ,'teams']));
    }
}
