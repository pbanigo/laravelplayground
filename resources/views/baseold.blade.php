<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>My First CRUD App in Laravel</title>
  <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

        	.fa-btn {
            margin-right: 6px;
        }
        	.links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
                margin-bottom: 20px;
            }

   			.full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .m-b-md {
                margin-bottom: 30px;
                text-align: center;
                font-size: 84px;
            }

    </style>
</head>
<body>
	<div class="title m-b-md">
                    <a href="/">Play Website</a>
                </div>
    <div style="text-align: center;" class="links">
                    <a href="/">Home</a>
                    <a href="about">About</a>
                    <a href="contacts">View Contacts</a>
                    <a href="ccontact">Create Contact</a>
                    <a href="products">View Products</a>
                    <a href="cproduct">Add Product</a>
                    <a href="tasks">View Tasks</a>
                    <a href="contact">Contact Us</a>
                </div>
  <div class="container">
    @yield('main')
  </div>
   <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>