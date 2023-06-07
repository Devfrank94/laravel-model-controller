@extends('layout.main')

@section('content')
<div class="container py-5 text-center">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Titolo Originale</th>
            <th scope="col">Nazionalità</th>
            <th scope="col">Data Pubblicazione</th>
            <th scope="col">Voto</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($movies as $movie)
        <tr>
            <th scope="row">{{$movie->id}}</th>
            <td>{{$movie->title}}</td>
            <td>{{$movie->original_title}}</td>
            <td>{{$movie->nationality}}</td>
            <td>{{$movie->date}}</td>
            <td>{{$movie->vote}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('home')}}"><button type="button" class="btn btn-primary mt-3">Torna alla Home</button></a>
</div>
@endsection
