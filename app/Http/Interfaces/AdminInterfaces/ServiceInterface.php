<?php
namespace App\Http\Interfaces\AdminInterfaces;

interface ServiceInterface{
    public function index();
    public function create();
    public function store($request);
    public function delete($request);
    public function edit($service_id);
    public function update($request);
}
