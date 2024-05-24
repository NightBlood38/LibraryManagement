@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kölcsönzés szerkesztése</h1>
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form action="{{ route('loans.update', $loan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="member_id">Tag</label>
            <select name="member_id" id="member_id" class="form-control">
                @foreach ($members as $member)
                    <option value="{{ $member->id }}" {{ $member->id == $loan->member_id ? 'selected' : '' }}>{{ $member->nev }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="book_id">Könyv</label>
            <select name="book_id" id="book_id" class="form-control">
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" {{ $book->id == $loan->book_id ? 'selected' : '' }}>{{ $book->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Mentés</button>
    </form>
    <form action="{{ route('loans.destroy', $loan->id) }}" method="POST" onsubmit="return confirm('Biztosan törölni szeretné ezt a kölcsönzést?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Törlés</button>
    </form>
</div>
@endsection
