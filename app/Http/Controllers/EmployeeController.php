<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    $obj = new Employee();
    		$obj->name = $request->name;
    		$obj->email = $request->email;
    		$obj->birth_date = $request->birth_date;
    		$obj->salary = $request->salary;
    		$obj->address = $request->address;
    		$obj->department_id = $request->department_id;

    		$obj->status = 1;
    		if($obj->save()){
    			return redirect()->to('/list');
    	}
}
