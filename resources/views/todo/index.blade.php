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
            <input type="radio" name="all"><p>すべて</p>&ensp;
            <input type="radio" name="working"><p>作業中</p>&ensp;
            <input type="radio" name="finished"><p>完了</p>
        </div>
        <table>
            <tr>
                <td id="tableList">ID</td>
                <td id="tableList">コメント</td>
                <td id="tableList">状態</td>
            </tr>
            <tr>
                <td>00</td>
                <td>ここにコメントする</td>
                <td><input type="submit" value="作業中">&nbsp;<input type="submit" value="削除"></td>
            </tr>
        </table>
        <h2>新規タスクの追加</h2>
        <input type="text" name="new">
        <input type="submit" value="追加">
    </div>
</body>
</html>
