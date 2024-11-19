@extends("layouts.app")

@section("style")
<style>
.error_style {
  color: red;
  font-size: 0.8rem;
}
</style>
@endsection

@section("title", isset($task)?"Edit Task" : "Create Task")

@section("content")

<form method="POST" action="{{isset($task)? route("tasks.update", ["task"=>$task->id]) : route("tasks.store")}}">
  @csrf
  @isset($task)
  @method("PUT")
  @endisset
  <div>
    <label for="title">title</label>
    <input name="title" id="title" value="{{$task->title ?? old("title")}}">
    @error("title")
    <p class="error_style">{{$message}}</p>
    @enderror
  </div>
  <div>
    <Label for="description">description</Label>
    <textarea name="description" id="description" rows="5">{{$task -> description ?? old("description")}}</textarea>
    @error("description")
    <p class="error_style">{{$message}}</p>
    @enderror
  </div>
  <div>
    <Label for="long_description">Long_description</Label>
    <textarea name="long_description" id="long_description"
      rows="10">{{$task->long_description ?? old("long_description")}}</textarea>
    @error("long_description")
    <p class="error_style">{{$message}}</p>
    @enderror
  </div>
  <button type="submit">
    @isset($task)
    Update task
    @else
    submit
    @endisset
  </button>
</form>
@endsection