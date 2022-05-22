<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/create.css">
    @yield('style')
    <!--===============================================================================================-->
</head>
<body>

<div class="bg-contact2" style="background-image: url('/create/images/bg-01.jpg');">
    <div class="container-contact2">
        <div class="wrap-contact2">
            @yield('form')
        </div>
    </div>
</div>
@yield('script')
</body>
</html>
