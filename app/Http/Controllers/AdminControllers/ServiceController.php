<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Interfaces\AdminInterfaces\ServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Service\CreateServiceRequest;
use App\Http\Requests\Service\DeleteServiceRequest;
use App\Http\Requests\Service\UpdatePortfolioRequest;

class ServiceController extends Controller
{
    public $ServiceInterface;

    public function __construct(ServiceInterface $ServiceInterface){
        $this->ServiceInterface = $ServiceInterface;
    }

    public function index()
    {
        return $this->ServiceInterface->index();
    }

    public function create()
    {
        return $this->ServiceInterface->create();
    }

    public function store(CreateServiceRequest $request)
    {
        return $this->ServiceInterface->store($request);
    }

    public function edit($service_id)
    {
        return $this->ServiceInterface->edit($service_id);
    }

    public function update(UpdatePortfolioRequest $request)
    {
        return $this->ServiceInterface->update($request);
    }

    public function delete(DeleteServiceRequest $request)
    {
        return $this->ServiceInterface->delete($request);
    }

}
