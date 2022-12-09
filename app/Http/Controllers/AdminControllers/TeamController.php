<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterfaces\TeamInterface;
use App\Http\Requests\Team\CreateTeamRequest;
use App\Http\Requests\Team\DeleteTeamRequest;
use App\Http\Requests\Team\UpdateTeamRequest;

class TeamController extends Controller
{
    public $TeamInterface;

    public function __construct(TeamInterface $TeamInterface )
    {
        $this->TeamInterface = $TeamInterface ;
    }

    public function index()
    {
        return $this->TeamInterface->index();
    }

    public function create()
    {
        return $this->TeamInterface->create();
    }

    public function store(CreateTeamRequest $request)
    {
        return $this->TeamInterface->store($request);
    }

    public function delete(DeleteTeamRequest $request)
    {
        return $this->TeamInterface->delete($request);
    }

    public function edit($team_id)
    {
        return $this->TeamInterface->edit($team_id);
    }

    public function update(UpdateTeamRequest $request)
    {
        return $this->TeamInterface->update($request);
    }
}
