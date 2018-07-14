<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Test extends Controller
{
  public function imdex(){
      $articles = Task::all();
      return view('index')->with('articles', $articles);
  }
}
