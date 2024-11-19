@extends("layouts.app")

@section("style")
<style>
.error_style {
  color: red;
  font-size: 0.8rem;
}
</style>
@endsection

@section("title", "Update Page")

@section("content")
@include("form", ["task"=>$tasks])
@endsection