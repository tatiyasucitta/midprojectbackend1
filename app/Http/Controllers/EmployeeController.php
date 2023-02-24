<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function view(){
       
        // dd($employees); 
        return view('view',['employees' => employee::all()]);
    }
    public function addviewpage(){
        return view('add');
    }
    public function add(request $request){
        Employee::create([
            'name' =>$request -> name,
            'age' =>$request -> age,
            'address' =>$request ->address,
            'phone' =>$request ->phone
        ]);
        return view('add');
    }
}
