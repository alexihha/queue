<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $articles = Task::all();
        return view('index')->with('articles', $articles);
    }

    public function counter($id)
    {
        DB::table('tasks')
            ->where('id', $id)
            ->increment('counter');
        DB::table('logs')
            ->insert(
                ['task_id' => $id, 'status' => 0]
            );
        return redirect('/');
    }
}

//Task::where('id', $id)->first()->increment('counter');


//public function counter($id){
//
//    $article->update(['counter' => '1']);
//    return redirect('/');
//}