<h1>HOME</h1>

<x-messagebanner msg="Hoooo" class="fail" />
<x-messagebanner msg="Hiioo" class="success" />

<x-messagebanner msg="Hoooo" class="success" />

<h1>{{$array[1]}}</h1>

@if($array[2]=='atul')
<h1>Atul Hai</h1>
@else
    <h1>koi aur</h1>
@endif

@foreach($array as $arr)

<h1>{{$arr}}</h1>

@endforeach