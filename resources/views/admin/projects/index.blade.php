@extends('layouts.admin')

@section('content')
<h1 class="text-center">I miei progetti:</h1>
<div class="container">
    <ul>
        @foreach ($projects as $project)
        <li>{{$project->title}}</li>
        @endforeach
    </ul>
</div>




@endsection