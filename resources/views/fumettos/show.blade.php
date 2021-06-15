@extends('layouts.main')
@section('content')
    <main>
        <h2>Titolo: {{$fumetto->title}}</h2>
        <ul>
            <li><img src="{{$fumetto->thumb}}" alt=""></li>
            <li>descrizione: {{$fumetto->description}}</li>
            <li>prezzo: {{$fumetto->price}} $</li>
            <li>data: {{$fumetto->date}}</li>
        </ul>
    </main>
@endsection