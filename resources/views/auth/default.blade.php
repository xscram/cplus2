<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

    <title>CoreUI Bootstrap 4 Admin Template</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        @section('content')
        @show

    </div>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('js/vendor/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/tether.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/pace.min.js') }}"></script>



</body>

</html>