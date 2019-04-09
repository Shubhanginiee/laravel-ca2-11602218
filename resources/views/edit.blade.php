@extends('layout')
@section('content')
    <h1 class="title">Edit Course</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        {{method_field('PATCH')}}
        {{csrf_field()}}

         <div class="field">
            <label class="label" for="id">Course Id</label>
            <div class="control">
                <input class="input" type="text" name="id" placeholder="Course Id" value="{{ $project->id }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="name">Course Name</label>
            <div class="control">
                <input class="input" type="text" name="name" placeholder="Course Name" value="{{ $project->name }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="code">Course Code</label>
            <div class="control">
                <input class="input" type="text" name="code" placeholder="Course Code" value="{{ $project->code }}">
            </div>
        </div>

         <div class="field">
            <label class="label" for="duration">Course Duration</label>
            <div class="control">
                <input class="input" type="number" name="duration" placeholder="Course Duration" value="{{ $project->duration }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Course</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        {{method_field('DELETE')}}
        {{CSRF_FIELD()}}

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete Course</button>
            </div>
        </div>
    </form>

@endsection