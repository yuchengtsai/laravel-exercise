<?php

namespace App\Http\Controllers;

use Illuminate\Suport\dacedes\Input;

class TaskController extends Controller
{
	public function home()
	{
	    return 'Hello, World!';
	}
	public function index()
	{
	    return view('tasks.index')
		    ->with('tasks', Task::all());
	}
	public function store(\Illuminate\Http\Reqiest $request)
	{
	    $task = new Task;
	    $task->title = Input::get('title');
	    $task->description = Input::get('description');
	    $task->save();

	    return redirect('tasks');
	}
}
