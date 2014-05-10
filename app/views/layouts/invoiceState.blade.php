@if($state=="unpaid")
<span class="label label-primary"> {{$state}}</span>

@elseif($state=="paid")
<span class="label label-success"> {{$state}}</span>

@elseif($state=="storno")
<span class="label label-default"> {{$state}}</span>

@else
<span class="label label-default"> {{$state}}</span>

@endif