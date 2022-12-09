<?php
namespace App\Http\Interfaces\AdminInterfaces;

interface TeamInterface{
    public function index();
    public function create();
    public function store($request);
    public function delete($request);
    public function edit($team_id);
    public function update($request);
}
