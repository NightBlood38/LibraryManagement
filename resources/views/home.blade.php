@extends('layouts.app')

@section('content')
@auth
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h1 class="card-header">Könyvtári kezelőfelület</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
@guest
    <h1>Library Management system - könyvtári nyilvántartáskezelő rendszer</h1>
<p>Ez a webalkalmazás egy egyetemi könyvtári nyilvántartáskezelő szoftver bemutató változata.
<br>Az alkalmazás kipróbálásához regisztráció szükséges.
<br><a href="">Dokumentáció</a>
<br><a href="https://github.com/NightBlood38/LibraryManagement">Github projekt</a></p>
@endguest
@endsection
