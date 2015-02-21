<table class="table table-bordered">
    <thead>

    <tr>


        <th>{{ trans('messages.first.name.and.last.name') }}</th>

        <th>{{ trans('messages.username') }}</th>

        <th>{{ trans('messages.email') }}</th>
        <th>{{ trans('messages.role') }}</th>

        <th style="width: 100px">{{ trans('messages.action') }}</th>


    </tr>

    </thead>
    <tbody>

    @foreach($users as $user)
    <p></p>


    <tr>


        <td>
            {{ link_to_action('AdminUserController@detail', $user->firstName.' '. $user->lastName , array($user->id) )}}


        </td>


        <td>


            {{ $user->username }}


        </td>


        <td>


            {{ $user->email }}


        </td>
        <td>
            {{$user->role}}
        </td>

        <td>


            {{ link_to_action('AdminUserController@detail', trans('messages.detail'), array($user->id), array('class' => 'btn
            btn-default btn-block') )}}
        </td>

    </tr>

    @endforeach

    </tbody>
</table>