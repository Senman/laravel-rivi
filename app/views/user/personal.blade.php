

<table class="table table-bordered">
    <tr>
        <th style="width: 30%">Telefon</th>
        <td>{{$user->telephone}}</td>

    </tr>
    <tr>
        <th>Email</th>
        <td>{{$user->email}}</td>
    </tr>
    <tr>


        <th>Adresa</th>
        <td>{{$user->addressFirstLine}}
            <br/>
            {{$user->addressSecondLine}}
        </td>
    </tr>
    <tr>
        <th>PSC</th>
        <td>{{$user->zip}}</td>
    </tr>
    <tr>


        <th>Město</th>
        <td>{{$user->city}}</td>
    </tr>
    <tr>
        <th>Země</th>
        <td>{{$user->country}}</td>
    </tr>
    <tr>
        <th>Bankovní učet</th>
        <td>{{$user->bankAccount}}</td>
    </tr>
    <tr>
        <th>Název banky</th>
        <td>{{$user->bankName}}</td>
    </tr>
    <tr>
        <th>Národnost</th>
        <td>{{$user->nationality}}</td>
    </tr>

</table>












