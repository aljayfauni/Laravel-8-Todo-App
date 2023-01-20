<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{

    // list new items
    public function index(){

        return view('welcome', ['ListItems' =>TodoList::all()]);
  

    }
    //Add newTodo Item
    public function saveItem(Request $request){
        \Log::info(json_encode($request->all()));

        $newTodoList = new TodoList;
        $newTodoList->name = $request->listItem;
        $newTodoList->is_complete = 0;
        $newTodoList->save();

        
  
          
            //return view('welcome')->with('success','Successfully Added New Record');
            return back()->with('success','Item created successfully!');
     
      
        
        
      
    }
}
