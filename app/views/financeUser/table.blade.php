<table class="table table-bordered">
    <thead>

    <tr>


        <th>Jméno a příjmení</th>

        <th>Username</th>



        <th>Email</th>
        <th style="width: 100px">Akce</th>


    </tr>

    </thead>
    <tbody>

    @foreach($users as $user)
    <p></p>


    <tr>


        <td>
            {{ $user->firstName }} {{ $user->lastName }}


        </td>


        <td>
            {{ $user->username }}


        </td>





        <td>


            {{ $user->email }}


        </td>


        <td>


            {{ link_to_action('FinanceUserController@detail', 'Detail', array($user->id), array('class' => 'btn
            btn-default btn-block') )}}
        </td>

    </tr>

    @endforeach

    </tbody>
</table>