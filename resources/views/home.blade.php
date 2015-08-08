@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1>Welcome to Laravel ToDo App</h1>
        <hr/>

        @include('partials.message')

        <h4>Manage Your Daily ToDo Lists</h4>


        <h4>&copy;{!! date('Y') !!}</h4>
    </div>
@endsection