<h1>Edit Meja</h1>

<form action="/mejas/{{$meja->id_meja}}" method="POST" >
    @method('PUT')
    @csrf
    Nama :<input type="text" name="nama_meja" value="{{$meja->nama_meja}}"><br>
    Alamat :<input type="text" name="alamat_meja" value="{{$meja->alamat_meja}}"><br>
    Telepon :<input type="text" name="telp_meja" value="{{$meja->telp_meja}}"><br>
    Deskripsi :<input type="text" name="deskripsi_meja" value="{{$meja->deskripsi_meja}}"><br>
    Tanggal :<input type="date" name="tanggal_meja" value="{{$meja->tanggal_meja}}"><br>
    Harga :<input type="number" name="harga_meja" value="{{$meja->harga_meja}}"><br>
    Gambar :<input type="file" name="image_meja" value="{{$meja->image_meja}}"><br>

    <input type="submit" value="Save">
</form>