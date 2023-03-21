<?php

namespace App\Http\Services;

use App\Repositories\EmployeeRepositoryEloquent;
use Illuminate\Http\Request;

class EmployeeService
{

    protected $repository;

    public function __construct( EmployeeRepositoryEloquent $repository){
        $this->repository = $repository;
    }

    public function index()
    {
        //
        return $this->repository->all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
       return $this->repository->delete($id);
    }
}
