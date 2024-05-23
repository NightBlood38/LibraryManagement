@extends('layout')

@section('content')
<div class="container">
    <h1>Könyvtári tagok</h1>
    <a href="{{ route('members.create') }}" class="btn btn-primary mb-3">Új könyvtári tag felvétele</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Név</th>
                <th>Lakcím</th>
                <th>Könyvtári tagság</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->nev}}</td>
                    <td>{{ $member->lakcim }}</td>
                    <td>{{ $member->hosszutipus() }}</td>
                    <td>
                        <a href="{{ route('members.show', $member) }}" class="btn btn-info btn-sm">Megtekintés</a>
                        <a href="{{ route('members.edit', $member) }}" class="btn btn-warning btn-sm">Szerkesztés</a>
    <form action="{{ route('members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Biztosan törölni szeretné ezt a könyvtári tagot?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Törlés</button>
    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
{{ $members->links() }}
</div>
@endsection