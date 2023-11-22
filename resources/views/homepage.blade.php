@extends('layouts.main')
@section('content')

<div>
    @foreach ($trains as $train)
    {{-- @if (str_contains(($train->departure), '2023-11-21')) --}}
    <div>
        {{$train->agency}}
        {{$train->departure}}
        {{$train->departure_station}}
        {{$train->arrival}}
        {{$train->arrival_station}}
    </div>
    {{-- @endif --}}
    @endforeach
</div>
@endsection

