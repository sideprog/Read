@extends('layouts.master')

@section('content')
    <div class="center-block" style="max-width: 600px;">
        <h1>Vos articles</h1>
        <div class="list-group">
            @for ($i = 0; $i < 10; $i++)
                <a href="article{{$i+1}}" class="list-group-item">
                    <h4 class="list-group-item-heading">Titre de l'article {{$i+1}}</h4>
                    <p class="list-group-item-text">{{Faker\Factory::create()->paragraph(rand(2,3))}}</p>
                </a>
            @endfor

        </div>
    </div>

@endsection