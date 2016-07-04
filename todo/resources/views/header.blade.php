<header id="header">
        <div class="container">
            <div class="col-md-12">
                <div class="logo text-center">
                    <h1><a href="/task">Todo App</a></h1>
                    {!! Form::open(['route' => 'task.index', 'method' => 'get']) !!}
                        <input type="search" name="search" placeholder="search...">
                    {!! Form::close() !!}
                </div>             
            </div>
        </div>
</header>
