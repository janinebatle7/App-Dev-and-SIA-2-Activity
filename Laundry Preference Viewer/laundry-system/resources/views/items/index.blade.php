@extends('layouts.app')

@section('content')

<h2>Customer Preferences List</h2>

<div style="display:flex; flex-wrap:wrap; gap:20px;">

@foreach($items as $item)

    <div class="card">

        <img src="{{ asset($item['image']) }}" width="100%" height="150">

        <h3>{{ $item['customer'] }}</h3>
        <p><strong>Scent:</strong> {{ $item['scent'] }}</p>
        <p><strong>Service:</strong> {{ $item['service'] }}</p>

        <a href="/items/{{ $item['id'] }}">
            <button class="btn">View Details</button>
        </a>

    </div>

@endforeach

</div>

@endsection