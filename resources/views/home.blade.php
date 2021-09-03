@extends('layouts.app')

@include('layouts.navigation')

@section('title', $title)

@section('content')
    <main class="container p-5">
        @if ($message = Session('message'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        @if ($error = Session('error'))
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endif

        <form action="{{ route('add_guest') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama disini">
            </div>
            <div class="my-2">
                <button type="submit" class="btn btn-primary ">Kirim</button>
            </div>
        </form>

    </main>
@endsection
