@extends('layouts.app')

@section('content')

<h2>Preference Details</h2>

<div class="card" style="max-width:400px;">

    <img src="{{ asset($item['image']) }}" width="100%">

    <h3>{{ $item['customer'] }}</h3>
    <p><strong>Scent:</strong> {{ $item['scent'] }}</p>
    <p><strong>Service:</strong> {{ $item['service'] }}</p>
    <p><strong>Notes:</strong> {{ $item['notes'] }}</p>

    <br>

    <a href="/items">
        <button class="btn">Back</button>
    </a>

</div>

@endsection