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
        Content::find($request->id)->delete();
        return redirect('/todo');
    }

    public function toggle(Request $request) {
        $param = Content::find($request->id);
        if ($request->condition === '作業中') {
            $param->fill(['condition' => '完了'])->save();
        } elseif ($request->condition === '完了') {
            $param->fill(['condition' => '作業中'])->save();
        }
        return redirect('/todo');
    }

    public function choose(Request $request) {
        $value = $request->cond_list;
        if ($value === 'すべて') {
            $items = Content::all();
            return view('todo.index', compact('items'));
        } elseif ($value === '作業中') {
            $items = Content::where('condition', '作業中')->get();
            $param = ['items' => $items];
            return view('todo.index', $param);
        } elseif ($value === '完了') {
            $items = Content::where('condition', '完了')->get();
            $param = ['items' => $items];
            return view('todo.index', $param);
        }
    }
}
