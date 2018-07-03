<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .header{height: 100px;background: darkred}
        .middle{height: 300px;background: lightblue}
        .footer{height: 100px;background: yellowgreen}
    </style>
</head>
<body>
<div class="header">我是公共头部 - 您当前访问的页面是：文章页面</div>
@yield('content')
<div class="footer">我是公共底部</div>
</body>
</html>