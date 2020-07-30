<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
    }



    public function index(Request $request)
    {
        $tasks = $request->user()->tasks()->orderBY('created_at', 'desc')->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {

        $this->validate($request, ['title' => 'required|max:255']);

        $request->user()->tasks()->create([
            'title' => $request->title

        ]);
        return redirect('/tasks');
    }

    public function destroy($id)
    {
        $task = Task::find($id);

        if (empty($task)) {
            return redirect('/tasks');
        }

        //$this->authorize('verify', $task);

        $task->delete();
        return redirect('/tasks');
    }
}
