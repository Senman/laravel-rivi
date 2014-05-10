<html>
<head><title>Time Log SHEET</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">


    <style>

        .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
            border: 1px solid #DDDDDD;
        }
        .table-bordered{

            width: 100%; border: solid 1px #666; border-collapse: collapse; border-spacing: 0
        }

        .table {

            line-height: 1.7;
            padding: 8px;
            vertical-align: top;

        }

        th {
            background-color: #efefef;
            text-align: left;
            padding: 2px 7px;
        }

        body {
            color: #333333;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 16px;
            line-height: 1.7;
        }


    </style>

</head>
<body>




    Time Log Sheet
</div>

<table  class="table table-bordered" >
    <tbody>
    <tr >
        <th style="width: 20%">Year</th>
        <th style="width: 25%" >Month</th>
        <th style="width: 15%">Day (list)</th>
        <th >Name</th>
    </tr>
    <tr >
        <td style="height: 45px"></td>
        <td ></td>
        <td ></td>
        <td ></td>

    </tr>
    </tbody>
</table>


    <table class="table table-bordered">
    <tbody>
    <tr >
        <th style="width: 5%"></th>
        <th style="width: 10%">Hour</th>
        <th style="width: 10%">Minute</th>
        <th style="width: 30%">Project CODE</th>
        <th style="width: 40%">Task</th>
        <th style="width: 5%"></th>

    </tr>

    <?

    for($i =1; $i<17; $i++ ){

        echo '<tr>';
        echo '<td style="text-align: center; font-size: 50%;">'.($i/2).'</td>';
        echo '<td style="height: 45px"></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td style="text-align: center;font-size: 50%;">'.$i.'</td>';
        echo '</tr>';
    }


    ?>

    </tbody>
</table>




</body>
</html>