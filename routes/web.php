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

Route::get("/tasks/{task}/edit", function (Task $task){
  return view("edit", [
    "tasks"=>$task
  ]);
})->name("tasks.edit");

Route::get("/tasks/{task}", function (Task $task){
  return view("show", [
    "tasks"=>$task
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

  return redirect()->route("tasks.show", ["task"=>$task->id])->with("success", "Task Created Successfully.");
})->name("tasks.store");

Route::put("/tasks/{task}", function(Task $task, Request $request) {
  $data = $request->validate([
    "title"=>"required", 
    "description"=>"required", 
    "long_description"=>"required",
  ]); 

  $task->title = $data["title"];
  $task->description = $data["description"];
  $task->log_description = $data["long_description"];
  $task->completed = false;
  $task->save();

  return redirect()->route("tasks.show", ["task"=>$task->id])->with("success", "Task updated Successfully.");
})->name("tasks.update");


?>