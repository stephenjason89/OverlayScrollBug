<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Apollo Systems') }}</title>
    <link crossorigin="anonymous" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- scrollbar styling -->
    <style module>
        .light::-webkit-scrollbar {
            width: 15px;
        }

        .light::-webkit-scrollbar-track {
            background: #e6e6e6;
            border-left: 1px solid #dadada;
        }

        .light::-webkit-scrollbar-thumb {
            background: #b0b0b0;
            border: solid 3px #e6e6e6;
            border-radius: 7px;
        }

        .light::-webkit-scrollbar-thumb:hover {
            background: black;
        }

        .dark::-webkit-scrollbar {
            width: 15px;
        }

        .dark::-webkit-scrollbar-track {
            background: #202020;
            border-left: 1px solid #2c2c2c;
        }

        .dark::-webkit-scrollbar-thumb {
            background: #3e3e3e;
            border: solid 3px #202020;
            border-radius: 7px;
        }

        .dark::-webkit-scrollbar-thumb:hover {
            background: white;
        }
    </style>

</head>
<body>


@yield('content')


<!-- Plugin JavaScript -->
{{--<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>--}}



</body>
</html>
