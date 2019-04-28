@extends('layouts.app')

@section('content')

<h1 class="text-center">Todos Page</h1>
    
<div class="row justify-content-center">
    <div class="col-md-8">

            <div class="card card-default">

                    <div class="card-header">
            
                        Todos
                    </div>
            
                    <div class="card-body">
                            @foreach($todos as $todo)
                            <ul class="list-group">
                        
                                <li class="list-group-item">
                                    {{ $todo->name }}

                                <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
                            
                                </li>
                        
                            </ul>
                            @endforeach
                    </div>
            
                </div>     

    </div>
</div>
    
@endsection  

