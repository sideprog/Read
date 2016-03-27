@extends('layouts.master')

@section('content')
    <div class="center-block" style="max-width: 600px;">
        <h1>Titre de l'article 1</h1>
        <p class="small text-muted">1567 mots, environ 6 minutes de lecture</p>
        <p>Voici un <span class="highlight">morceau de texte surligné.</span></p>
        @for ($i = 0; $i < 10; $i++)
            <p>{{Faker\Factory::create()->paragraph(rand(3,15))}}</p>
        @endfor
    </div>

@endsection