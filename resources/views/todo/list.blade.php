@extends('layouts.master')

@section('content')
    {{--<h1>Todo List<a href="{{ url('/todo/category/create') }}" class="btn btn-primary pull-right col-sm-offset-7 btn-sm">Add New Category</a>--}}
        {{--<a href="{{ url('/todo/create') }}" class="btn btn-primary pull-right btn-sm">Add New Todo</a></h1>--}}
    <hr/>



    @if(count($todoList))
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr class="text-uppercase">
                    <th class="text-center">ToDo Name</th>
                    <th class="text-center">Completed</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($todoList as $todo)
                    <tr>
                        <td class="text-center">{{ $todo->name }}</td>
                        <td class="text-center">{{ $todo->complete? 'Completed' : 'Pending' }}</td>
                        <td class="text-center">
                            {!! Form::open(['route' => ['todo.update', $todo->id], 'class' => 'form-inline', 'method' => 'put']) !!}
                                @if($todo->complete)
                                    {!! Form::submit('Incomplete', ['class' => 'btn btn-info btn-xs']) !!}
                                @else
                                    {!! Form::submit('Complete', ['class' => 'btn btn-success btn-xs']) !!}
                                @endif
                            {!! Form::close() !!}

                            {!! Form::open(['route' => ['todo.destroy', $todo->id], 'class' => 'form-inline', 'method' => 'delete']) !!}
                                {!! Form::hidden('id', $todo->id) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {!! $todoList->render() !!}
        </div>
    @else
        <div class="text-center">
            <h3>No todos available yet</h3>
            <p><a href="{{ url('/todo/create') }}">Create new todo</a></p>
        </div>
    @endif
@endsection