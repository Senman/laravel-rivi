@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-12">


            <h1>

                Account: {{ $account->name }}


            </h1>
        </div>

    </div>


    <div class="row ">


        <div class="col-md-6">


            <div id="line-example"></div>

        </div>
        <div class="col-md-6">

            <div id="donut-example"></div>


        </div>
    </div>
    <div class="row ">
        <div class="col-md-6">


            <div id="bar-example"></div>

        </div>
        <div class="col-md-6">


            <div id="area-example"></div>
        </div>
    </div>


    <script>

        Morris.Line({
            element: 'line-example',
            data: [
                { y: '2006', a: 100, b: 90 },
                { y: '2007', a: 75, b: 65 },
                { y: '2008', a: 50, b: 40 },
                { y: '2009', a: 75, b: 65 },
                { y: '2010', a: 50, b: 40 },
                { y: '2011', a: 75, b: 65 },
                { y: '2012', a: 100, b: 90 }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B']
        });


        Morris.Donut({
            element: 'donut-example',
            data: [
                {label: "Download Sales", value: 12},
                {label: "In-Store Sales", value: 30},
                {label: "Mail-Order Sales", value: 20}
            ]
        });


        Morris.Bar({
            element: 'bar-example',
            data: [
                { y: '2006', a: 100, b: 90 },
                { y: '2007', a: 75, b: 65 },
                { y: '2008', a: 50, b: 40 },
                { y: '2009', a: 75, b: 65 },
                { y: '2010', a: 50, b: 40 },
                { y: '2011', a: 75, b: 65 },
                { y: '2012', a: 100, b: 90 }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B']
        });


        Morris.Area({
            element: 'area-example',
            data: [
                { y: '2006', a: 100, b: 90 },
                { y: '2007', a: 75, b: 65 },
                { y: '2008', a: 50, b: 40 },
                { y: '2009', a: 75, b: 65 },
                { y: '2010', a: 50, b: 40 },
                { y: '2011', a: 75, b: 65 },
                { y: '2012', a: 100, b: 90 }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B']
        });


    </script>


</div>


</div>

</div>


@stop