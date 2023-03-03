<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Todo;
class TodosController extends Controller
{
    //Metrodo index para motrar todos los elementos
    //store para guardar
    //update,destroy y edit
    public function store(Request $request){
   
        $request->validate(['title']);
        
        $todo = new Todo;
        $todo-> title = $request -> title;
        $todo->save();

        return redirect()->route('todos')->with('sucess','Tarea creada correctamente');
     
    }

    public function index() {
        $todos = Todo::all();
        return view('todos.index',['todos' ->$todos]);
    }
    public function show($id) {
        $todos = Todo::find($id);
        return view('todos.index',['todo' ->$todo]);
    }

    public function update() {
        $todos = Todo::all();
        return view('todos.index',['todos' ->$todos]);
    }

    public function destroy() {
        $todos = Todo::all();
        return view('todos.index',['todos' ->$todos]);
    }

}
