<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>名称</td>
            <td>年龄</td>
            <td>手机号</td>
            <td>操作</td>
        </tr>
        @foreach($res as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->tel}}</td>
            <td>{{$v->age}}</td>
            <td>
                <a href="{{'del/'.$v->id}}">删除</a>
                <a href="{{'upd/'.$v->id}}">修改</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>