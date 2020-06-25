<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    public function index() {
        return view('todo.index');
    }
}
