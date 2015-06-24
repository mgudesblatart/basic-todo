@extends('app')

@section('title') {{$task->name}} for {{$project->name}}@stop
@section('content')
    <h2>{!!link_to_route('projects.show', $project->name, [$project->slug])!!} -
        {{$task->name}}
    </h2>
  <p>Completed:
      @if(Input::get('completed')=== 'true')
          Yes
      @else
          No
      @endif


  </p>

    <h3>Description</h3>
   <p>{{$task->description}}</p>

    {!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug)) !!}

@endsection