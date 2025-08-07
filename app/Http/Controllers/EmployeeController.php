<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function list(Request $request){
        $employees = Employee::select(['name','image','latitude','longitude'])
        ->whereStatus('Active')
        ->get();

        return view('employees.list',['employees'=> $employees]);
    }
}