<table class="table table-bordered">
    <thead>

    <tr>


    <tr>


        <th>Id</th>

        <th style="width: 20%">Username</th>


        <th>Email</th>
        <th>Name</th>

        <th style="text-align: right">Role</th>

        <th style="text-align: right">Created at</th>

        <th style="text-align: right">Updated at</th>

        <th></th>
    </tr>


    </tr>

    </thead>
    <tbody>

    @foreach($users as $user)

    <tr
        class='default'>

        <td>


            {{ $user->id }}
        </td>

        <td>
            <strong>
                {{$user->username}}

            </strong>
        </td>
        <td>


            {{ $user->email }}
        </td>

        <td>
            {{$user->firstName}} {{$user->lastName}}
        </td>

        <td>
            {{$user->role}}

        </td>




        <td>
            {{$user->created_at}}

        </td>

        <td>
            {{$user->updated_at}}

        </td>


        <td>

            {{ link_to_action('UserController@detail', 'Detail', array($user->id),
            array('class' => 'btn btn-default btn-block')) }}

        </td>

    </tr>

    @endforeach

    </tbody>
</table>