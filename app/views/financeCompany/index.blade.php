@extends('layouts.master')

@section('content')


<div class="container">

    <div class="row ">


        <div class="col-md-9">


            <h1>


                Administrace společností


            </h1>


        </div>

        <div class="col-md-3">


            {{ link_to_action('AdminCompanyController@create', 'Nova spolecnost',null, $attributes = array('class'
            => 'btn btn-success btn-block' ) )}}

            <br />

        </div>

    </div>

    <div class="row ">


        <div class="col-md-12">

            <table class="table table-bordered">
                <thead>

                <tr>


                    <th>Název</th>

                    <th>IČ</th>

                    <th>Adresa</th>


                    <th>Země</th>


                </tr>

                </thead>
                <tbody>

                @foreach($companies as $company)

                <tr>
                    <td>

                        {{ link_to_action('AdminCompanyController@detail', $company->name, array($company->id))}}
                    </td>

                    <td>
                        {{$company->cid}}

                    </td>

                    <td>
                        {{$company->street}},  {{$company->zip}},  {{$company->city}}
                    </td>


                    <td>
                        {{$company->country}}
                    </td>

                </tr>

                @endforeach

                </tbody>
            </table>


        </div>




    </div>

</div>


@stop