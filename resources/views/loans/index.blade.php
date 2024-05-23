@extends('layout')

@section('content')
<div class="container">
    <h1>Kölcsönzések</h1>
    <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">Új kölcsönzés</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Kölcsönző tag neve</th>
                <th>Kikölcsönzött Könyv Címe</th>
                <th>Kölcsönzés Dátuma</th>
                <th>Visszahozás Dátuma</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loans as $loan)
            <tr>
                <td>{{ $loan->member->nev }}</td>
                <td>{{ $loan->book->title }}</td>
                <td>{{ $loan->loan_date }}</td>
                <td>{{ $loan->return_date ?? "A könyvet még nem hozták vissza." }}</td>
                <td>
                        <a href="{{ route('loans.show', $loan) }}" class="btn btn-info btn-sm">Kölcsönzés részleteinek megtekintése</a>
                        <a href="{{ route('loans.edit', $loan) }}" class="btn btn-warning btn-sm">Kölcsönzés módosítása</a>
                        <form action="{{ route('loans.destroy', $loan->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Biztosan törölni szeretné ezt a kölcsönzést?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Kölcsönzés Törlése</button>
                        </form>
                    <form action="{{ route('loans.return_book', $loan->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Könyv visszavétele</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
{{ $loans->links() }}
</div>
@endsection