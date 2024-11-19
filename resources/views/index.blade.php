@extends("layouts.app")

<!-- This section is for title -->
@section("title")
<h2>Tasks List</h2>
@endsection

<!-- The below section is for content -->
@section("content")
@foreach($tasks as $task)
<a href="{{route("tasks.show", ["task"=>$task->id])}}">{{$task->title}}</a><br />
@endforeach

@if($tasks->count())
<div>
  {{$tasks->links()}}
</div>
@endif

@endsection