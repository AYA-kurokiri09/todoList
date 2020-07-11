<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('todo_css/stylesheet.css') }}">
    <title>Todo List</title>
</head>
<body>
    <div class="container">
        <h1>ToDoリスト</h1>
            <form action="/todo/choose" name="cond_lists" class="radioBtn" method="post" onclick="document.cond_lists.submit();">
                @csrf
                <input type="radio" name="cond_list" value="すべて" {{ old('cond_list','すべて') === 'すべて' ? 'checked' : '' }}><p>すべて</p>&ensp;
                <input type="radio" name="cond_list" value="作業中" id="作業中" @if(old('cond_list', '作業中')==='作業中')checked="checked"@endif><p>作業中</p>&ensp;
                <input type="radio" name="cond_list" value="完了" {{ old('cond_list') === '完了' ? 'checked' : '' }}><p>完了</p>
            </form>
        <table>
            <tr>
                <th id="tableList">ID</th>
                <th id="tableList">コメント</th>
                <th id="tableList">状態</th>
            </tr>
            @foreach ($items as $item)
            <tr>
                <td >{{$loop->iteration}}</td>
                <td>{{$item->comment}}</td>
                <td><form action="/todo/toggle"  method="post">
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                <input type="submit" name="condition" value="{{$item->condition}}">
                </form></td>
                <td><form action="/todo/delete" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                <input type="submit" value="削除">
                </form></td>
            </tr>
            @endforeach
        </table>
        <h2>新規タスクの追加</h2>
        <form action="/todo" method="post">
        @csrf
            <input type="text" name="input">
            <input type="submit" value="追加">
        </form>
    </div>
</body>
</html>
