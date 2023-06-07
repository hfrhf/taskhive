<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=Task::where('user_id', auth()->user()->id)->get();;
  
       return view("tasks.index",compact("tasks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tasks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
       
        $form = $request->validated();
        $form["user_id"]=Auth::id();
        Task::create($form);
        return redirect()->route("task.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $titleTask=$task->task;
        return view("tasks.show",compact("task","titleTask"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view("tasks.edit",compact("task"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        $form = $request->validated();
        if($request->hasfile("file")){
            $form["file"]=$request->file("file")->store("files","public");
        }
        
        $task->fill($form)->save();
        return to_route("task.index");
    }
 


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return to_route("task.index");
    }
    public function destroyTask(Task $task)
    {
        $task->delete();
        return to_route("user.show",$task->user_id);
    }

}

