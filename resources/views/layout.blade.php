<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FlavorFul</title>

    @include('headLinks')
</head>

<body class="">
    {{-- @auth --}}
    @include('header')
    {{-- @endauth --}}

    @yield('content')

    <div class="loading-overlay d-flex justify-content-center align-items-center position-fixed bg-light start-0 top-0 w-100 h-100 bg-opacity-75">
        <div class="spinner-grow" style="width: 2rem; height: 2rem;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;" role="status" >
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow mx-2" style="width: 2rem; height: 2rem;animation-delay: .1s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow" style="width: 2rem; height: 2rem;animation-delay: .2s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js'></script>

</html>
