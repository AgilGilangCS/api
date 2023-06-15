<h1>list lainnya</h1>
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
        @foreach($lainnyas as $lainnya)
        <tr>
            <td>{{$lainnya->nama_lainnya}}</td>
            <td>{{$lainnya->alamat_lainnya}}</td>
            <td>{{$lainnya->telp_lainnya}}</td>
            <td>{{$lainnya->deskripsi_lainnya}}</td>
            <td>{{$lainnya->tanggal_lainnya}}</td>
            <td>{{$lainnya->harga_lainnya}}</td>
            <td>
                @if($lainnya->image_lainnya)
                <img src="{{ asset('storage/img/' . $lainnya->image_lainnya) }}" alt="Gambar Meja"  width="200" height="200">
                @else
                No Image
                @endif
            </td>
            <td>
                <a href="/lainnyas/{{$lainnya->id_lainnya}}/edit">Edit</a>
                <form action="/lainnyas/{{$lainnya->id_lainnya}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    <a href="/lainnyas/tambah">Tambah</a>
</table>