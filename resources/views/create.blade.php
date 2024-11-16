@extends("layouts.app")

@section("style")
<style>
.error_style {
  color: red;
  font-size: 0.8rem;
}
</style>
@endsection

@section("title", "Create Page")

@section("content")

<form method="POST" action="{{route("tasks.store")}}">
  @csrf
  <div>
    <label for="title">title</label>
    <input name="title" id="title">
    @error("title")
    <p class="error_style">{{$message}}</p>
    @enderror
  </div>
  <div>
    <Label for="description">description</Label>
    <textarea name="description" id="description" rows="5"></textarea>
    @error("description")
    <p class="error_style">{{$message}}</p>
    @enderror
  </div>
  <div>
    <Label for="long_description">Long_description</Label>
    <textarea name="long_description" id="long_description" rows="10"></textarea>
    @error("long_description")
    <p class="error_style">{{$message}}</p>
    @enderror
  </div>
  <button type="submit">Submit</button>
</form>
@endsection