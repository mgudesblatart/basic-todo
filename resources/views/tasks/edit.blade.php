@extends('app')

@section('title') Edit Task for {{$project->name}}@stop
@section('content')
    <h2>Edit Task "{{$project->name}}"</h2>
    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]])!!}
        @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}

@endsection