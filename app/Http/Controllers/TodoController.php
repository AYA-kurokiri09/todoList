<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    public function index(Request $request) {
        $items = Content::all();
        return view('todo.index', ['items' => $items], ['input' => '']);
    }

    public function add(Request $request) {
        $content = new Content();
        $content->fill([
            'comment' => $request->input,
            'condition' => '作業中',])
            ->save();

        $items = Content::all();
        return view('todo.index', ['items' => $items], ['input' => '']);
    }
}
