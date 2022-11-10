@extends('template')

@section('Title')

@section('Content')

@include('navbar')
<br>
<div class= "d-flex justify-content-around">

@for($i = 0; $i < count($name); $i++)
<div class= "d-flex justify-content-around">
    <div class="card" style="width: 25rem;">
        <img class="card-img-top" src="{{$img[$i]}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $name[$i] }}</h5>
          <p class="card-text">{{ $desc[$i] }}</p>
        </div>
    @if ($type[$i] == "DPS")
        <span class="badge badge-danger">{{$type[$i]}}</span>
    @elseif ($type[$i] == "Support")
        <span class="badge badge-success">{{$type[$i]}}</span>
    @else
        <span class="badge badge-secondary">{{$type[$i]}}</span>
    @endif
    </div>
</div>
@endfor

@endsection


