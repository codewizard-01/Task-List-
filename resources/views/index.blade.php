@extends("layouts.app")

<!-- This section is for title -->
@section("title")
<div class="nav nav-bar-primary d-flex" style="display: flex; justify-content: space-around">
  <a href="#">Home</a>
  <a href="#">Gallery</a>
  <a href="#">About</a>
  <a href="#">About</a>
  <a href="#">Contact</a>
</div>
@endsection

<!-- The below section is for content -->
@section("content")
<h2>Tasks List</h2>
@foreach($tasks as $task)
<a href="{{route("tasks.show", ["id"=>$task->id])}}">{{$task->title}}</a><br />
@endforeach

@endsection