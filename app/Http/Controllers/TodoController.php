<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = ToDo::all();
        return view('admin.todos.index', compact('todo'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.todos.create');
    }


    //  * Store a newly created resource in storage.

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|string|max:255',
            'priority' => 'required|string|max:255',
            'status' => 'required|string|max:255'
        ]);
        ToDo::create($request->all());
        return redirect()->route('admin.todos.index')->with('success', 'Task created successfully.');
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
    public function edit(ToDo $todo)
    {
        return view('admin.todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ToDo $todo)
    {
        $request->validate([
            'task' => 'required|string|max:255',
            'priority' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
        $data = $request->all();
        $todo->update($data);
        return redirect()->route('admin.todos.index')->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToDo $todo)
    {
        $todo->delete();
        return redirect()->route('admin.todos.index')->with('danger', 'Task deleted successfully');
    }
}
