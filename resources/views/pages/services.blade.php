@extends('layouts.app')

@section('content')
    <h1>{{$data['title']}}</h1>

  @if(count($services) >0)
  <ul>
    @foreach($services as $ally)
<li> {{$ally-}}</li>
    @endforeach
</ul>
  @endif
@endsection
