@extends('layout.list100')

@section('title', 'Ini adalah judul pada meta')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataku)
        <tr>
            <td>{{ $dataku['id'] }}</td>
            <td>{{ $dataku['produk'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
