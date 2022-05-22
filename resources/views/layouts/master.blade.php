<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\css\material.css" >
    <title>Document</title>
</head>
<body class="bg-light">
<style>
    .table td {
        text-align: center;
    }
</style>

<div class="container">
    <div class="row justify-content-center mt-5">
        @yield('content')
    </div>
</div>

        @yield('script')
</body>
</html>