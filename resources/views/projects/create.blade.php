
@extends('app')
@section('title') Create Project @stop
@section('content')
    <h2>Create Project</h2>
    {!! Form::model(new App\Project, ['route'=> ['projects.store']])!!}
        @include('projects/partials/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}

@endsection