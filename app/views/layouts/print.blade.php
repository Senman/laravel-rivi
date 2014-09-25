<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title> Rive - Senman s.r.o. </title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800italic,800,700italic,600italic,600,400italic,300italic,300&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
    <style>

        body {
            color: #222;
            font: 'Open Sans';
            font-weight: 400;
            font-size: 11px;
            line-height: 1.42857;

        }

        strong {

            font: 'Open Sans';
            font-weight: 600;
            color: #222;
        }

        table.table {

            margin-bottom: 15px;
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;


        }

        .table td {
            font: 'Open Sans';
            line-height: 1;
            padding:  8px;
            vertical-align: middle;
            font-size: 12px;
            color: #000;
        }

        .table th {
            font: 'Open Sans';
            line-height: 1;
            padding: 8px;
            text-align: left;
            vertical-align: middle;
            font-size: 12px;
            color: #222;
        }

        .table-bordered {

            border: 1px solid #DDDDDD;
        }

        .table-bordered td {

            border: 1px solid #DDDDDD;
        }

        .table-bordered th {

            border: 1px solid #DDDDDD;
        }

        .row {

            width: 100%;
            clear: both;
            display: block;
        }

        .col-md-6 {

            display: block;

            width: 50% ;
            float: left;
        }

        h1 {
            font: 'Open Sans';
            font-size: 24px;
            margin: 5px 0 3px 0;
            line-height: 1.42857;
            color: #000;
        }

        h2 {
            font: 'Open Sans';
            margin: 5px 0 3px 0;
            font-size: 20px;
            line-height: 1;
            color: #000;
        }

        h3 {
            font: 'Open Sans';
            margin: 5px 0 3px 0;
            font-size: 17px;
            line-height: 1;
            color: #000;
        }
        h4 {
            font: 'Open Sans';
            margin: 5px 0 3px 0;
            font-size: 14px;
            line-height: 1;
            color: #000;


        }


        p{

            line-height: 0.9;
            color: #000;

        }


        @page { margin: 80px 50px 150px;  }
        #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 50px;  text-align: right; }

        #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px;  }

    </style>

</head>



<body>


@yield('content')


</body>
</html>