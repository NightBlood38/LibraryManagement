@extends('layout')

@section('content')
<div class="container">
    <h1>Új kölcsönzés létrehozása</h1>
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form action="{{ route('loans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="member_id">Tag</label>
            <select name="member_id" id="member_id" class="form-control">
                @foreach ($members as $member)
                    <option value="{{ $member->id }}">{{ $member->nev }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="book_id">Könyv</label>
            <select name="book_id" id="book_id" class="form-control">
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Mentés</button>
    </form>
</div>
@endsection
