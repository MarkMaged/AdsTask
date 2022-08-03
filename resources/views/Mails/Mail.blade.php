@extends('layout.main-layoy')

@section('title', 'Email Send')


@section('content')

    <div class="content">
        <div class="title">
            {{ $details['title'] }}
        </div>

        <p>{{ $details['body'] }}</p>
    </div>

@endsection
