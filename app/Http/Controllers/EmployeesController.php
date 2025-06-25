<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){
        $employee_data = Employees::all();
        return view('admin.backend.employees.index', compact('employee_data'));
    }

    public function create(){
        return view('admin.backend.employees.create');
    }

    public function store(Request $request){
        $request->validate([
            'employee_code' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female',
            'phone' => 'required|string|max:255',
            'religion' => 'required|string|in:islam,kristen,hindu,budha,konghucu',
            'position' => 'required|string|in:nurse,pharmacist,doctor,finance,security',
        ]);

        $date = now()->format('Ymd');
        $countToday = Employees::whereDate('created_at', now()->toDateString())->count() + 1;
        $employee_code = 'EMP' . $date . str_pad($countToday, 4, '0', STR_PAD_LEFT);

        Employees::create([
            'employee_code'=>$employee_code,
            'name'=>$request->name,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'religion'=>$request->religion,
            'position'=>$request->position,
        ]);

        return redirect()->route('employees.index')->with('message', 'Employees Created Success');

    }

    public function edit($id){
        $employee_data = Employees::find($id);
        return view('admin.backend.employees.edit', compact('employee_data'));
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'employee_code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female',
            'phone' => 'required|string|max:255',
            'religion' => 'required|string|in:islam,kristen,hindu,budha,konghucu',
            'position' => 'required|string|in:nurse,pharmacist,doctor,finance,security',
        ]);

        $employee = Employees::findOrFail($id);

        $employee->update($validated);

        return redirect()->route('employees.index')->with('message', 'Employee Update Success');

    }

    public function show(){
        $employee_data = Employees::all();
        return view('admin.backend.employees.index', compact('$employee_data'));
    }

    public function destroy($id){
        $employee = Employees::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('message', 'Employee Delete Success');

    }
}
