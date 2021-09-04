@extends('layouts.app')

@include('layouts.navigation')

@section('title', $title)
@section('content')
    <main class="container p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ALL_GUEST as $guest)
                    <tr>
                        <td>{{ $guest['name'] }}</td>
                        <td>{{ $guest['created_at'] }}</td>
                        <td>
                            <form action="delete/{{ $guest['id'] }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection
