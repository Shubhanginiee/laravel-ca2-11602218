@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title}}</h1>

    <div class="content">{{ $project->id }}</div>
    <div class="content">{{ $project->name }}</div>
    <div class="content">{{ $project->code }}</div>
    <div class="content">{{ $project->duration }}</div>
    
    <p>
        <a href="/projects/{{ $project->id}}/edit">Edit</a>
    </p>
@endsection

