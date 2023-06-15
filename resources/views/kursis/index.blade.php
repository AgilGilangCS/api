<h1>list kursi</h1>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kursis as $kursi)
        <tr>
            <td>{{$kursi->nama_kursi}}</td>
            <td>{{$kursi->alamat_kursi}}</td>
            <td>{{$kursi->telp_kursi}}</td>
            <td>{{$kursi->deskripsi_kursi}}</td>
            <td>{{$kursi->tanggal_kursi}}</td>
            <td>{{$kursi->harga_kursi}}</td>
            <td>
                @if($kursi->image_kursi)
                <img src="{{ asset('storage/img/' . $kursi->image_kursi) }}" alt="Gambar Meja"  width="200" height="200">
                @else
                No Image
                @endif
            </td>
            <td>
                <a href="/kursis/{{$kursi->id_kursi}}/edit">Edit</a>
                <form action="/kursis/{{$kursi->id_kursi}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    <a href="/kursis/tambah">Tambah</a>
</table>