<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('goods/update/'.$res->id)}}" method="post">
        @csrf
    <table>
    <tr>
            <td>名称</td>
            <td><input type="text" name="name" value="{{$res->name}}"></td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="text" name="tel" value="{{$res->tel}}"></td>
        </tr>
        <tr>
            <td>手机号</td>
            <td><input type="text" name="age" value="{{$res->age}}"></td>
        </tr>
        <tr>
            <td><input type="submit" value="修改"></td>
            <td></td>
        </tr>
    </table>
    </form>
</body>
</html>