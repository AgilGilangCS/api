<h1>Edit lemari</h1>

<form action="/lemaris/{{$lemari->id_lemari}}" method="POST" >
    @method('PUT')
    @csrf
    Nama :<input type="text" name="nama_lemari" value="{{$lemari->nama_lemari}}"><br>
    Alamat :<input type="text" name="alamat_lemari" value="{{$lemari->alamat_lemari}}"><br>
    Telepon :<input type="text" name="telp_lemari" value="{{$lemari->telp_lemari}}"><br>
    Deskripsi :<input type="text" name="deskripsi_lemari" value="{{$lemari->deskripsi_lemari}}"><br>
    Tanggal :<input type="date" name="tanggal_lemari" value="{{$lemari->tanggal_lemari}}"><br>
    Harga :<input type="number" name="harga_lemari" value="{{$lemari->harga_lemari}}"><br>
    Gambar :<input type="file" name="image_lemari" value="{{$lemari->image_lemari}}"><br>

    <input type="submit" value="Save">
</form>