<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title> Rivi - Senman s.r.o. </title>

    <link type="image/png" rel="shortcut icon" href="favicon.png">


    {{ HTML::style('css/bootstrap.min.css') }}

    {{ HTML::style('css/datepicker3.css') }}


    {{ HTML::style('css/fuelux.min.css') }}



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{ HTML::script('js/jquery-1.11.0.min.js') }}



</head>


<body class="fuelux">


<div class="navbar navbar-inverse " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <a href="#" class="navbar-brand" id="navbarSubMenu">
                <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                &NonBreakingSpace;
                Rivi - Senman s.r.o.
            </a>


        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                @if(Auth::check())

                @include('layouts.menu')


                @endif

            </ul>

            <ul class="nav navbar-nav navbar-right">

                @if(Auth::check())

                <li>
                    {{ link_to_action('UserController@index', Auth::user()->firstName .' '. Auth::user()->lastName) }}

                </li>

                <li>
                    {{ link_to_action('LogoutController@index', 'Odhlásit' ) }}

                </li>
                @else
                <li>
                    {{ link_to_action('LoginController@index', 'Přihlásit' ) }}

                @endif

            </ul>

        </div>


        @if(Auth::check())

        <div id="navbarSubMenuContainer" style="display:none; ">
        </div>

        <script>

            $.get("http://zone.senman.com/menu/index.php", function (data) {
                $("#navbarSubMenuContainer").html(data);

            });

            $("#navbarSubMenu").click(function () {
                $("#navbarSubMenuContainer").slideToggle();
            });


        </script>
        @endif
    </div>
</div>


@if(Session::has('message'))

<div class="container">
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Info!</strong> {{ Session::get('message') }}
    </div>
</div>


@endif

@if(Session::has('error'))
<div class="container">

    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Chyba</strong> {{ Session::get('message') }}
    </div>

</div>

@endif


@yield('content')


<div class="container">

    <div class="pull-right">

        <footer>
            <p>&copy; Senman s.r.o. 2013</p>
        </footer>
    </div>

</div>
<!-- /container -->


{{ HTML::script('js/bootstrap.min.js') }}

{{ HTML::script('js/fuelux.min.js') }}


<script>



    $('.datepicker').datepicker();

</script>


<script>

    $('select.ajax').on('change', function () {

        var url = $(this).val();

        $.ajax({
            url: url,
            cache: false
        })
            .done(function (html) {
                $("#company").append(html);
            });
    });

</script>


</body>
</html>
