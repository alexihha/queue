<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getTasks(){
        $articles = Task::all();
        return view('index')->with('articles', $articles);

    }

    public function addCount(Request $request){

    }
}
