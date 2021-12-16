<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    nav {
        text-align: center;
        padding: 20px;
    }

    nav li {
        list-style: none;
        display: inline-block;
    }

    nav li a {
        text-decoration: none;
        color: black;
    }

    nav li a:hover {
        color: blue;
    }

    .title,
    .nomi {
        text-align: center;
        padding: 20px;
    }

    .nomi {
        font-size: 21px;
        color: darkgrey;
    }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}"> Home</a></li>
            <li><a href="{{ route('about') }}"> About</a></li>
            <li><a href="{{ route('shop') }}"> Shop</a></li>
        </ul>
    </nav>

    <h1 class="title">
        Hello world
    </h1>

    <div class="nomi">
        @foreach( $names as $name )
        <span>{{ $name }}</span>
        @endforeach
    </div>

</body>

</html>