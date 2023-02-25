<?php

namespace App\Http\Controllers;


use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class EmployeeController extends Controller
{
    public function view(){
        $employees = Employee::all();
        // dd($employees); 
        return view('welcome',['employees' => $employees]);
    }

    
    public function addviewpage(){
        return view('add');
    }
    public function add(request $request){

        $validated = $request->validate([
            "name" => "required|min:5|max:20",
            "age" => "required|numeric|min:21",
            "address" => "required|min:10|max:40",
            "phone" => "required|regex:/^08/|min:9|max:12"
        ]);

        Employee::create([
            'name' =>$request -> name,
            'age' =>$request -> age,
            'address' =>$request ->address,
            'phone' =>$request ->phone
        ]);

        return back()->withErrors(["status" => "Created new Employee named " . $request->EmployeeName ]);
        return view('add');
    }
    function update($id){
        $employee = Employee::find($id);
        // dd($id); 
        return view('update');
    }
}
