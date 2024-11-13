@extends("layouts.app")

@section("title", "Create Page")

@section("content")
<form method="POST" action="{{route("tasks.create")}}">
  @csrf
  <div>
    <label for="name">title</label>
    <input name="name" id="name">
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