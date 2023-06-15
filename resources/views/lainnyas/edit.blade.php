<h1>Edit lemari</h1>

<form action="/lainnya/{{$lainnya->id_lainnya}}" method="POST" >
    @method('PUT')
    @csrf
    Nama :<input type="text" name="nama_lemari" value="{{$lainnya->nama_lainnya}}"><br>
    Alamat :<input type="text" name="alamat_lemari" value="{{$lainnya->alamat_lainnya}}"><br>
    Telepon :<input type="text" name="telp_lemari" value="{{$lainnya->telp_lainnya}}"><br>
    Deskripsi :<input type="text" name="deskripsi_lemari" value="{{$lainnya->deskripsi_lainnya}}"><br>
    Tanggal :<input type="date" name="tanggal_lemari" value="{{$lainnya->tanggal_lainnya}}"><br>
    Harga :<input type="number" name="harga_lemari" value="{{$lainnya->harga_lainnya}}"><br>
    Gambar :<input type="file" name="image_lemari" value="{{$lainnya->image_lainnya}}"><br>

    <input type="submit" value="Save">
</form>