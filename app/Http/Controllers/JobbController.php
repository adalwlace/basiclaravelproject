<?php

namespace App\Http\Controllers;

use App\Models\Jobb;
use Illuminate\Http\Request;

class JobbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobbs = Jobb::all();
        return view('admin.jobbs.index', compact('jobbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobbs.create');
    }


    //  * Store a newly created resource in storage.

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'name' => 'required',
            'email' => 'required',
            'cover_letter' => 'required',

        ]);
        Jobb::create($request->all());
        return redirect()->route('admin.jobbs.index')->with('success', 'Jobb created successfully.');
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
    public function edit(Jobb $jobb)
    {
        return view('admin.jobbs.edit', compact('jobb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jobb $jobb)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required',
            'cover_letter' => 'required|string|max:255',

        ]);
        $data = $request->all();
        $jobb->update($data);
        return redirect()->route('admin.jobbs.index')->with('success', 'Jobb updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jobb $jobb)
    {
        $jobb->delete();
        return redirect()->route('admin.jobbs.index')->with('danger', 'Jobb deleted successfully');
    }
}


