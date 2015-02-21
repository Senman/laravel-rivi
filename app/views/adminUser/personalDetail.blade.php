<dl class="dl-horizontal">

    @if($user->telephone)
    <dt>{{ trans('messages.telephone') }}</dt>
    <dd>{{$user->telephone}}</dd>
    @endif

    @if($user->email)
    <dt>{{ trans('messages.email') }}</dt>
    <dd>{{$user->email}}</dd>
    @endif

    @if($user->addressFirstLine)
    <dt>{{ trans('messages.Adresa') }}</dt>
    <dd>{{$user->addressFirstLine}}
        <br/>
        {{$user->addressSecondLine}}
    </dd>
    @endif


    @if($user->zip)
    <dt>{{ trans('messages.zip') }}</dt>
    <dd>{{$user->zip}}</dd>
    @endif

    @if($user->city)
    <dt>{{ trans('messages.city') }}</dt>
    <dd>{{$user->city}}</dd>
    @endif

    @if($user->country)
    <dt>{{ trans('messages.country') }}</dt>
    <dd>{{$user->country}}</dd>
    @endif

    @if($user->bankAccount)
    <dt>{{ trans('messages.bank.account') }}</dt>
    <dd>{{$user->bankAccount}}</dd>
    @endif

    @if($user->bankName)
    <dt>{{ trans('messages.bank.name') }}</dt>
    <dd>{{$user->bankName}}</dd>
    @endif

    @if($user->nationality)
    <dt>{{ trans('messages.nationality') }}</dt>
    <dd>{{$user->nationality}}</dd>
    @endif

</dl>











