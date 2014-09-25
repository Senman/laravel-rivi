@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>

                <small> Detail zaměstnance</small>
                <br>
                {{$user->firstName}}

                {{$user->lastName}}

            </h1>


        </div>

        <div class="col-md-3">

            {{ link_to_action('FinanceUserController@index', 'Zpět', null , array('class' => 'btn
            btn-default btn-block')) }}

        </div>



    </div>


    <div class="row ">

        <div class="col-md-9">


            <table class="table table-bordered">
                <tr>
                    <th>
                       Jméno
                    </th>

                    <td>
                        {{$user->firstName}}
                    </td>

                </tr>


                <tr>
                    <th>
                        Příjmení
                    </th>

                    <td>
                        {{$user->lastName}}
                    </td>

                </tr>

                <tr>
                    <th>
                        Uživatelské jméno
                    </th>

                    <td>
                        {{$user->username}}
                    </td>

                </tr>

                <tr>
                    <th>
                        Email
                    </th>

                    <td>
                        {{$user->email}}
                    </td>

                </tr>

            </table>

            <br/>

        </div>

        <div class="col-md-3">


            @include('financeUser.buttons')

            <br/>

        </div>


    </div>


</div>
</div>


@stop