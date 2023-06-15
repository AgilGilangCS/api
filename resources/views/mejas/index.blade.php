<h1>list Meja</h1>
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
        @foreach($mejas as $meja)
        <tr>
            <td>{{$meja->nama_meja}}</td>
            <td>{{$meja->alamat_meja}}</td>
            <td>{{$meja->telp_meja}}</td>
            <td>{{$meja->deskripsi_meja}}</td>
            <td>{{$meja->tanggal_meja}}</td>
            <td>{{$meja->harga_meja}}</td>
            <td>
                @if($meja->image_meja)
                <img src="{{ asset('storage/img/' . $meja->image_meja) }}" alt="Gambar Meja"  width="200" height="200">
                @else
                No Image
                @endif
            </td>
            <td>
                <a href="/mejas/{{$meja->id_meja}}/edit">Edit</a>
                <form action="/mejas/{{$meja->id_meja}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    <a href="/mejas/tambah">Tambah</a>
</table>