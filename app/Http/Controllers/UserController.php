<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class UserController extends Controller
{

    public function index (){
        $res =
            DB::table('tasks')
                ->where('name', 'Отправка письма')
                ->value('id', 'name');
        dd($res);
    }
}
