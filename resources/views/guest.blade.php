@extends('layouts.app')

@include('layouts.navigation')

@section('title', $title)
@section('content')
    <main class="container p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Hadir Pada</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ALL_GUEST as $guest)
                    <tr>
                        <th scope="row">{{ $guest['id'] }}</th>
                        <td>{{ $guest['name'] }}</td>
                        <td>{{ $guest['created_at'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection
