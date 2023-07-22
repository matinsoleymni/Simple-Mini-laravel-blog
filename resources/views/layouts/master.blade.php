<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog With laravel</title>
    <link rel="stylesheet" href="https://blokchainology.com/CDN/min24.css">
    <style>
        * {
            font-family: "Fira Code";
        }
    </style>
</head>
<body>


    <header class="d-flex j-evenly align-item-c back-dmagenta radius-20 p-10 white">
        <div>
            <img class="radius-25" src="{{asset('images/1.jpg')}}" alt="logo" width="100px">
        </div>

        <div class="right__header">
            <ul class="d-flex list-n gap-15">
                <li class="pr-15"><a class="white" href="{{ route('post.create') }}">Create</a></li>
                <li><a class="white" href="{{ route('post.index') }}">Home</a></li>
            </ul>
        </div>  
    </header>


    @yield('content')

</body>
</html>
