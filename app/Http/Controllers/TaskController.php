<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $articles = Task::all();
        return view('index')->with('articles', $articles);
    }
    public function counter(){

        return redirect('/');
    }
}
