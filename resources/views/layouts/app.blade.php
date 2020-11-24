<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
</head>
<body>

{{-- navbar --}}
@livewire('navbar')

{{-- content--}}
<div class="container ">
    <div class="row mt-2">
        <div class="col-md-2 badge-dark">
            @livewire('sidebar')
        </div>
        <div  class="col-md-8 ">
            @yield('content')
        </div>
        <div class="col-md-2">
            <h1>Here will be reklama</h1>
        </div>
    </div>
</div>


{{--footer--}}
<div class="container">
    <h1>Here will be footer</h1>
</div>

@livewireScripts
</body>
</html>
