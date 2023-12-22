<?php

namespace App\Http\Controllers;

use App\Models\todo_list;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('view_list')->with('todo_arr',todo_list::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_new_list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todo = new todo_list();
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(todo_list $todo_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo_list $todo_list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo_list $todo_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo_list $todo_list)
    {
        //
    }
}
