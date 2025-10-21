<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("subjects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        //
        $validated= $request->validated();

        Subject::create($validated);
        return back()->with('success', 'Subject ' . $validated['name'] . ' created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
         return view('subjects.edit', compact('subject'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        //
        $validated = $request->validated();
        $subject->updated($validated);

        return back()->with('success', 'Subject updated successfully');
    }

    public function deactivate($id){

        $subject = Subject::find($id);

        if(!$subject){
            abort(404);
        }

        $subject->update(['status' =>0]);
        
        return back()->with('success', 'Subject deactivated successfully');

    }

    

    public function activate($id){

        $subject = Subject::find($id);
        if(!$subject){
            abort(404);

        }

        $subject->update(['status' =>1]);
        
        return back()->with('success', 'Subject activated successfully');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
