<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));

    }

    public function create()
    {
        return view('admin.students.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'class' => 'required',
        ]);
        Student::create($request->all()); //stored at backend
        return redirect()->route('admin.students.index')->with('success', 'Student created successfully.');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'class' => 'required|string|max:255',
        ]);
        $data = $request->all();
        $student->update($data);
        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students.index')->with('danger', 'Student deleted successfully');
    }
}
