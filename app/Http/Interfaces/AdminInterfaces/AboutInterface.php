<?php
namespace App\Http\Interfaces\AdminInterfaces;


interface AboutInterface{
    public function index();
    public function create();
    public function store($request);
    public function delete($request);
    public function edit($id);
    public function update($request);
}
