@extends('layout')

@section('content')
    <div class="vangsten-container">
        <h1>Mijn Vangsten</h1>
        <p>Hier vind je een overzicht van enkele van mijn mooiste vangsten.</p>

        <div class="vangsten-gallery">
            <img src="{{ asset('images/vangsten/karper1.jpeg') }}" alt="Karper 1">
            <img src="{{ asset('images/vangsten/karper2.jpeg') }}" alt="Karper 2">
            <img src="{{ asset('images/vangsten/karper3.jpeg') }}" alt="Karper 3">
            <img src="{{ asset('images/vangsten/karper4.jpeg') }}" alt="Karper 4">
            <img src="{{ asset('images/vangsten/karper5.jpeg') }}" alt="Karper 5">
            <img src="{{ asset('images/vangsten/karper6.jpeg') }}" alt="Karper 6">
            <img src="{{ asset('images/vangsten/karper7.jpeg') }}" alt="Karper 7">


        </div>
    </div>
@endsection
