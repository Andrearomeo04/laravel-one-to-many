@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">{{ $project->title }}</h2>
            <img class="img-show" src="{{ $project->image !== null ? asset('./storage/' . $project->image) : 'https://placehold.co/600x400?text=Immagine+copertina' }}" alt="">
            <h2>Descrizione</h2>
            <p>{{ $project->description }}</p>
            <h2>tipologia</h2>
            {{ $project->type_id }}
        </div>
    </div>
</div>
@endsection