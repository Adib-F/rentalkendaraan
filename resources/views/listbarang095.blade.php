<html>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <thead>
            <tbody>
                @foreach($data as $dataku)
                <tr>
                    <td>{{ $dataku['id'] }}</td>
                    <td>{{ $dataku['nama'] }}</td>
                    <td>{{ $dataku['harga'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
</html>