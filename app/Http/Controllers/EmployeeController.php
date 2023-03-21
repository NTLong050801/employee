<?php

namespace App\Http\Controllers;

use App\Http\Services\EmployeeService;
use App\Repositories\EmployeeRepository;
use App\Repositories\EmployeeRepositoryEloquent;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $EmployeeSerivce;

    public function __construct(EmployeeService $employeeService){
        $this->EmployeeSerivce = $employeeService;
    }

    public function index()
    {
        //
        $employees = $this->EmployeeSerivce->index();
        $title = "List Employees";
        return view('home',compact('employees','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Add Employee";
        return view('create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->EmployeeSerivce->store($request);

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $this->EmployeeSerivce-> destroy($id);
        return redirect()->back();
    }
}
