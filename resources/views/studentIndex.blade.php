@extends('layout')
@section('content')
<div class="container">
 @foreach($students as $detail)
 <ul class="list-group p-2">
 <li class="list-group-item">{{$detail->id}}</li>
 <li class="list-group-item">{{$detail->name}}</li>
 <li class="list-group-item">{{$detail->email}}</li>
 <li class="list-group-item">{{$detail->subject}}</li>
 <li class="list-group-item">{{$detail->feedback}}</li>
 </ul>

 @endforeach
</div>
@endsection

