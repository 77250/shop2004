<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>用户ID</td>
            <td>用户名</td>
            <td>邮箱</td>
            <td>密码</td>
            <td>注册时间</td>
            <td>最后登录时间</td>
            <td>最后登录IP</td>
            <td>登录次数</td>
            <td>操作</td>
        </tr>
        @foreach($res as $v)
        <tr>
            <td>{{$v->user_name}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
            @endforeach
    </table>
</body>
</html>