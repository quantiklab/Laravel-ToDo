@extends('layouts.master')

@section('content')
    {{--<h1>Todo List<a href="{{ url('/todo/category/create') }}" class="btn btn-primary pull-right col-sm-offset-7 btn-sm">Add New Category</a>--}}
    {{--<a href="{{ url('/todo/create') }}" class="btn btn-primary pull-right btn-sm">Add New Todo</a></h1>--}}
    <hr/>



    @if(count($categories))
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr class="text-uppercase">
                    <th class="text-center">Category Name</th>
                    <th class="text-center">Todos</th>
                    <th class="text-center">Number of Todos</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="text-center">{{ $category->name }}</td>
                        <td class="text-center"><a href="#">View</a></td>
                        <td class="text-center">{!! rand(1,3) !!}</td>
                        <td class="text-center">
                            {!! Form::open(['route' => ['category.update', $category->id], 'class' => 'form-inline', 'method' => 'put']) !!}
                            {!! Form::close() !!}

                            {!! Form::open(['route' => ['category.destroy', $category->id], 'class' => 'form-inline', 'method' => 'delete']) !!}
                            {!! Form::hidden('id', $category->id) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{--<div class="text-center">--}}
        {{--{!! $categories->render() !!}--}}
        {{--</div>--}}
    @else
        <div class="text-center">
            <h3>No Categories available yet</h3>

            <p><a href="{{ url('/category/create') }}">Create New Category</a></p>
        </div>
    @endif
@endsection