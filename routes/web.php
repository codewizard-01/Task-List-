<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;


Route::get("/", function() {
  return redirect()->route("tasks.index");
});

Route::get("/tasks", function() {
  return view("index", [
    "tasks"=>\App\Models\Task::latest()->where("completed", true)->get()
  ]);
})->name("tasks.index");

Route::view("/tasks/create", 'create');

Route::get("/tasks/{id}", function ($id){
  return view("show", [
    "tasks"=>\App\Models\Task::findOrFail($id)
  ]);
})->name("tasks.show");

Route::POST("/tasks/store", function(Request $request) {
  dd($request->all());
})->name("tasks.create");

?>