<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;
use Session;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $task = Task::orderBy('id', 'dsc');
        $search = $request->search;
        if(!empty($search)){
            $task->Where('task', 'LIKE', '%'.$search.'%');
        }
        $task = $task->paginate(4);
        return view('home')->withTask($task);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|max:25'
            ]);
        $task = new Task;
        $task->task = $request->name;
        $task->save();
        Session::flash('status', $task->task.' has been added on the todo list.');
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('task')->withTask($task);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        Session::flash('status', $task->task. ' hase been deleted from the todo list.');
        return redirect('/task');
    }
    
}
