@extends('main')
@section('content')
    <section class="input">
        <div class="container">
            {!! Form::open(['route' => 'task.store', 'method' => 'post']) !!}
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="task_add">
                            <input type="text" name="name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="task_add">
                            <input class="btn btn-primary" type="submit" name="Add" value="Add Task">
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
    <section class="main">
        <div class="container">
            @if(count($task) > 0)
                @foreach($task as $t)
                    <div class="col-md-6 col-md-offset-2"> 
                        <div class="task">
                            <ul>
                                <li><a href="{{'task/'.$t->id}}">{{$t->task}}</a></li>  
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="delete">
                           {!! Form::open(['route' => ['task.destroy', $t->id], 'method' => 'delete']) !!}
                        <div class="form-group">
                            <ul>
                                <li> <button type="submit" name="submit" class="btn btn-default">Delete</button></li>
                            </ul>
                        </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="text-center">
                {!! $task->links() !!}
            </div>
        </div>
    </section>
@endsection