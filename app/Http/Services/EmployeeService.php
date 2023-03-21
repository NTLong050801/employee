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


    public function store($request)
    {
        //
        $this->repository->create($request->input());
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
        return $this->repository->find($id, $columns = ['*']);
    }


    public function update( $request, string $id)
    {
        //
        return $this->repository->update($request->input(),$id);
    }


    public function destroy(string $id)
    {
       return $this->repository->delete($id);
    }
}
