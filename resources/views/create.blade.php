@extends("layouts.app")

@section("title", "Create Page")

@section("content")
{{$errors}}
<form method="POST" action="{{route("tasks.store")}}">
  @csrf
  <div>
    <label for="title">title</label>
    <input name="title" id="title">
  </div>
  <div>
    <Label for="description">description</Label>
    <textarea name="description" id="description" rows="5"></textarea>
  </div>
  <div>
    <Label for="long_description">Long_description</Label>
    <textarea name="long_description" id="long_description" rows="10"></textarea>
  </div>
  <button type="submit">Submit</button>
</form>
@endsection