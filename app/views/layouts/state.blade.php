@if($state=="new")
<span class="label label-primary"> {{$state}}</span>

@elseif($state=="active")
<span class="label label-success"> {{$state}}</span>

@elseif($state=="qa")
<span class="label label-warning"> {{$state}}</span>

@elseif($state=="closed")
<span class="label label-danger"> {{$state}}</span>


@else


<span class="label label-default"> {{$state}}</span>

@endif