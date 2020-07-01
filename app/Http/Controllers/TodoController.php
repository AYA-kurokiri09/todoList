<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    public function index() {
        $items = Content::all();
        return view('todo.index', compact('items'));
    }

    public function add(Request $request) {
        $content = new Content();
        $content->fill([
            'comment' => $request->input,
            'condition' => '作業中',])
            ->save();
        return redirect('/todo');
    }

    public function delete(Request $request) {
        $items = Content::all();
        return view('todo.delete', compact('items')); /*ここで処理が止まっている*/
        
        Content::find($request->id)->delete();
        return redirect('/todo', compact('items'));
    }
}
