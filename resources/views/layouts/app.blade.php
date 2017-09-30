<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel CRUD Operations - Basic</title>

    <!-- bootstrap minified css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- bootstrap minified js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- custom CSS -->
    <style>
        h1{font-size:23px;}
        .pull-left h2{margin-top:0;font-size:20px;}
        table thead{
            background: #337ab7;
            color: #fff;
        }
        .row .add-new{
            margin-bottom: 7px;
        }

    </style>
</head>

<body>
<div class="container">
    <h1>CRUD (Create Read Update Delete) Operations in Laravel</h1>
    @yield('content')
</div>
</body>
</html>