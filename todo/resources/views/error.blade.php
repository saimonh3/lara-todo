<div class="container">
     @if(count($errors) > 0)
            <div class="alert alert-danger text-center">
                <strong>Whoops! Something went wrong!</strong>
                <br>
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
            </div>
            @endif
            @if(Session::has('status'))
                <div class="alert alert-success">
                    {{ Session::get('status') }}
                </div>
    @endif
</div>