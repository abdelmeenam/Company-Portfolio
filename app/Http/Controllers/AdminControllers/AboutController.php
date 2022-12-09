<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterfaces\AboutInterface;
use App\Http\Requests\About\CreateAboutRequest;
use App\Http\Requests\About\DeleteAboutRequest;
use App\Http\Requests\About\UpdateAboutRequest;

class AboutController extends Controller
{

    public $AboutInterface;

    public function __construct(AboutInterface $AboutInterface){
        $this->AboutInterface = $AboutInterface;
    }

    public function index()
    {
        return $this->AboutInterface->index();
    }

    public function create()
    {
        return $this->AboutInterface->create();
    }

    public function store(CreateAboutRequest $request)
    {
        return $this->AboutInterface->store($request);
    }


    public function delete(DeleteAboutRequest $request)
    {
        return $this->AboutInterface->delete($request);
    }

    public function edit($id)
    {
        return $this->AboutInterface->edit($id);
    }

    public function update(UpdateAboutRequest $request)
    {
        return $this->AboutInterface->update($request);
    }

}
