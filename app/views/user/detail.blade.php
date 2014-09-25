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




    </div>


    <div class="row ">


        <div class="col-md-9">

            @include('user.internal')

            @include('user.personal')
        </div>

        <div class="col-md-3">

            @include('user.buttons')


            <br/>

        </div>


    </div>


</div>
</div>


@stop