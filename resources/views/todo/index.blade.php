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
        <div class="condition">
            <input type="radio" name="radio" checked="checked"><p>すべて</p>&ensp;
            <input type="radio" name="radio"><p>作業中</p>&ensp;
            <input type="radio" name="radio"><p>完了</p>
        </div>
        <table>
            <tr>
                <th id="tableList">ID</th>
                <th id="tableList">コメント</th>
                <th id="tableList">状態</th>
            </tr>
            @foreach ($items as $item)
            <form action="/todo/delete" method="post">
            @csrf
            <tr>
                <td >{{$item->id}}</td>
                <td>{{$item->comment}}</td>
                <td><input type="submit" value="作業中"></td>
                <td><input type="hidden" name="id" value="{{$item->id}}"><input type="submit" name="remove" value="削除"></td>
            </form>
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
