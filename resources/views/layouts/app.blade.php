<!DOCTYPE html>
<html>
<head>
    <title>{{ $title or 'Hookah Box' }}</title>

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/choosen.css') }}">

    <!-- Meta Command -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font link -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- js script link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/choosen.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</head>
<body>

@yield('header')
@yield('content')
@yield('footer')