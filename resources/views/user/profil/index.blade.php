@extends('layouts.app')
@vite(['resources/css/user/profil/index.css'])
@section('content')
    <section class="main-container">

        <a class="btn-kembali" href="{{ route('index-user') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5" />
                    <path d="M12 19l-7-7 7-7" />
                </svg>
            </span>
            <span>Kembali</span>
        </a>

        <div class="container-profil">
            <figure>
                <div class="container-profil-kosong">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                        </svg>
                    </span>
                </div>
            </figure>
            <div>
                <span>
                    <span class="kndoaod">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                        </svg>
                    </span>

                    <div>
                        <small>Username</small>
                        <strong>{{ Auth::user()->name }}</strong>
                    </div>
                </span>

                <span>
                    <span class="hoadjaojdo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <path d="M3 7l9 7 9-7" />
                        </svg>
                    </span>

                    <div>
                        <small>Email</small>
                        <strong>{{ Auth::user()->email }}</strong>
                    </div>
                </span>
            </div>
        </div>
    </section>
@endsection
