@extends('layouts.master')

@section('content')

    <h1>Lire un nouvel article</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-xs-8">
                <input type="text" class="form-control" id="url" placeholder="Coller ici l'url http://">
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary">Lire</button>
            </div>
        </div>
    </form>

@endsection