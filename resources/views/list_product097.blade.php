@extends('layout.list097')

@section('title', 'Product')

@section('content')
    <table border="-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
                <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>{{ $post['nama'] }}</td>
                    <td>{{ $post['harga'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
