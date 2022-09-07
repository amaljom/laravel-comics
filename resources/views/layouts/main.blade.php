<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comics</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:wght@200;300;400;500;600;700&family=Mukta:wght@200;300;400;500&family=Open+Sans:wght@400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    
    @include('includes.header')

    <main>
        @yield('main-content')
    </main>
    
    @include('includes.footer')
    
</body>
</html>