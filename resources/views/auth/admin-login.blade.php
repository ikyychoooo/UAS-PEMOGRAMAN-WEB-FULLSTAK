@extends('layouts.app')

@section('content')

<h1>Admin Panel</h1>

<form action="{{ route('admin.login.submit') }}" method="POST">
    @csrf

    <div>
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"

            placeholder="admin@gmail.com"
        >
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Masukan Password anda"
        >
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password_confirmation">Ulangi Password</label>
        <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="Ulangi password Anda"
        >
        @error('password_confirmation')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Masuk</button>

</form>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@endsection
