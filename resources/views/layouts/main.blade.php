<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400&family=Urbanist:wght@100;200;300;600;700&display=swap"
        rel="stylesheet">
    <title>{{  $title ?? 'Axies'}}</title>
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/author.js  '])
    

</head>
<body class="bg-[#14141F]">
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>

    @include('partials.footer')


</body>
</html>
