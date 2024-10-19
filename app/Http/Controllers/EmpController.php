<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmpController extends Controller
{
    public function index()
    {
        $employees= Employee::all();
        return view('admin.employees.index',compact('employees'));
    }

    public function create()
    {
        return view('admin.employees.create');//uri
    }

    public function store(Request $request)
    {
        $request->validate(
            [
            'name'=>'required',
            'email'=>'required',
            'position'=>'required',
            ]);

    Employee::create($request->all());
    return redirect()->route('admin.employees.index')->with('success','Employee created successfully');
    }

    public function edit(Employee $employee)
    {
        return view('admin.employees.edit', compact('employee'));//
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
        ]);
        $data = $request->all();
        $employee->update($data);
        return redirect()->route('admin.employees.index')->with('success', 'Employee list updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('admin.employees.index')->with('danger', 'Employee deleted successfully');
    }

}
