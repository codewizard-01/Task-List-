@extends("layouts.app")

@section("content")
<h1>{{$tasks->title}}</h1>
<p>{{$tasks->description}}</p>
<p>{{$tasks->created_at}}</p>
<p>{{$tasks->updated_at}}</p>
@endsection