@extends('layouts.main')

@section('content')
    <main>
        <h2>FUMETTI</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>TITLE</th>                    
                <th>DETTAGLI</th>
            </tr>
            @foreach ($fumettos as $fumetto)
                <tr>
                    <td>{{$fumetto->id}}</td>
                    <td>{{$fumetto->title}}</td>
                    <td><a href="{{route('fumettos.show', $fumetto->id)}}">Dettagli</a></td>
                </tr>
            @endforeach
        </table>
    </main>

@endsection