<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
         <style>

            #form-container {
                display: flex;
                justify-content: center;
            }
            form {
                height: 200px;
                width: 200px;
                position: absolute;
            }
            input {
                height: 20px;
                width: 200px;
                position: relative;
                float:left; margin: 5px;
                padding: 4px;
            }
            h1 {
                text-align: center; color:blueviolet;
                margin-top: 100px;
            }
         </style>


    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @if(auth()->user())
        <p> The user is authenticated.</p>
        @else
        <p> The user is not authenticated.</p>
    @endif
        
        <a href="/products">Products</a>
        <a href="/home">home</a>
        <h1>Sign Up</h1>
        <div id="form-container">

        <form method="post" action="{{route('signup.create')}}">
            @csrf
            <input id="name" type=text class="form-control" placeholder="Name" name="name"></input>
            <input id="email" type="text" class="form-control" placeholder="Email" name="email"></input>
            <input id="password" type="text" class="form-control" placeholder="Password" name="password"></input>
            <button type="submit">Submit</button>
        </form>

        </div>
    </body>
</html>
