<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portfolio\CreatePortfolioRequest;
use App\Http\Requests\Portfolio\DeletePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;

class PortfolioController extends Controller
{

    public $PortfolioInterface;

    public function __construct(PortfolioInterface $PortfolioInterface){
        $this->PortfolioInterface = $PortfolioInterface;
    }

    public function index()
    {
        return $this->PortfolioInterface->index();
    }

    public function create()
    {
        return $this->PortfolioInterface->create();
    }

    public function store(CreatePortfolioRequest $request)
    {
        return $this->PortfolioInterface->store($request);

    }

    public function edit($portfolio_id)
    {
        return $this->PortfolioInterface->edit($portfolio_id);
    }

    public function update(UpdatePortfolioRequest $request)
    {
        return $this->PortfolioInterface->update($request);
    }

    public function delete(DeletePortfolioRequest $request)
    {
        return $this->PortfolioInterface->delete($request);
    }
}
