<h1>list lemari</h1>
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
        @foreach($lemaris as $lemari)
        <tr>
            <td>{{$lemari->nama_lemari}}</td>
            <td>{{$lemari->alamat_lemari}}</td>
            <td>{{$lemari->telp_lemari}}</td>
            <td>{{$lemari->deskripsi_lemari}}</td>
            <td>{{$lemari->tanggal_lemari}}</td>
            <td>{{$lemari->harga_lemari}}</td>
            <td>
                @if($lemari->image_lemari)
                <img src="{{ asset('storage/img/' . $lemari->image_lemari) }}" alt="Gambar Meja"  width="200" height="200">
                @else
                No Image
                @endif
            </td>
            <td>
                <a href="/lemaris/{{$lemari->id_lemari}}/edit">Edit</a>
                <form action="/lemaris/{{$lemari->id_lemari}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    <a href="/lemaris/tambah">Tambah</a>
</table>