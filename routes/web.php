<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/", function() {
  return redirect()->route("tasks.index");
});

Route::get("/tasks", function() {
  return view("index", [
    "tasks"=>Task::latest()->where("completed", true)->get()
  ]);
})->name("tasks.index");

Route::view("/tasks/create", 'create')->name("tasks.create");

Route::get("/tasks/{id}", function ($id){
  return view("show", [
    "tasks"=>Task::findOrFail($id)
  ]);
})->name("tasks.show");

Route::post("/tasks", function(Request $request) {
  $data = $request->validate([
    "title"=>"required", 
    "description"=>"required", 
    "long_description"=>"required",
  ]); 

  $task = new Task;
  $task->title = $data["title"];
  $task->description = $data["description"];
  $task->log_description = $data["long_description"];
  $task->completed = false;
  $task->save();

  return redirect()->route("tasks.show", ["id"=>$task->id])->with("success", "Task Created Successfully.");
})->name("tasks.store");

?>