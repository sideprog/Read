@extends('layouts.master')

@section('content')
    <div class="center-block" style="max-width: 600px;">
        <h1>Titre de l'article 1</h1>
        @for ($i = 0; $i < 10; $i++)
            <p>{{Faker\Factory::create()->paragraph(rand(3,15))}}</p>
        @endfor
    </div>

@endsection