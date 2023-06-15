<h1>Edit kursi</h1>

<form action="/kursis/{{$kursi->id_kursi}}" method="POST" >
    @method('PUT')
    @csrf
    Nama :<input type="text" name="nama_kursi" value="{{$kursi->nama_kursi}}"><br>
    Alamat :<input type="text" name="alamat_kursi" value="{{$kursi->alamat_kursi}}"><br>
    Telepon :<input type="text" name="telp_kursi" value="{{$kursi->telp_kursi}}"><br>
    Deskripsi :<input type="text" name="deskripsi_kursi" value="{{$kursi->deskripsi_kursi}}"><br>
    Tanggal :<input type="date" name="tanggal_kursi" value="{{$kursi->tanggal_kursi}}"><br>
    Harga :<input type="number" name="harga_kursi" value="{{$kursi->harga_kursi}}"><br>
    Gambar :<input type="file" name="image_kursi" value="{{$kursi->image_kursi}}"><br>

    <input type="submit" value="Save">
</form>