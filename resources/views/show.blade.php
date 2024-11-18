@extends("layouts.app")

@section("content")
<h1>{{$tasks->title}}</h1>
<p>{{$tasks->description}}</p>
<p>{{$tasks->created_at}}</p>
<p>{{$tasks->updated_at}}</p>

<form method="POST" action="{{route("tasks.destroy", ["task"=>$tasks->id])}}">
  @csrf
  @method("delete")
  <button>Delete</button>
</form>
@endsection