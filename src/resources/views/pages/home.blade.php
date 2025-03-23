@extends('layout')

@section('content')
    <div class="home-container">
        <h1>Welkom op mijn karpervis-website!</h1>

        <img src="{{ asset('images/karper_home.jpeg') }}" alt="Karper in de natuur" class="home-image">

        <p>
            Hallo! Ik ben een gepassioneerd karpervisser en op deze website deel ik graag wat meer over mezelf, mijn
            hobby en mijn viservaringen.
        </p>

        <p>
            Gebruik het menu bovenaan om meer te ontdekken over mijn liefde voor karpervissen,
            mijn favoriete stekken en hoe je zelf kunt beginnen.
        </p>

        <a href="{{ route('hobby') }}" class="cta-button">Lees meer over karpervissen</a>
    </div>
@endsection
