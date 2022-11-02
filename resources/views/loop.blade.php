@extends('main')

@section('Title', 'Overwatch')

@section('Loading')
@for ($i= 0; $i<=100; $i+=25)
<h1 style="color: white"> Overwatch Loading Progress: {{ $i }}% </h1><br>

@if ($i == 100)
 <h1 style="color: orange"> Overwatch Loading Completed! </h1> <br>
<h2 style="color: white"> "The world could always use more heroes..." </h2>
@break
@endif
@endfor
@endsection

