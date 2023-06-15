<h1>Tambah Meja</h1>

<form action="/lemaris" method="POST" enctype="multipart/form-data">
    @csrf
    Nama :<input type="text" name="nama_lemari"><br>
    Alamat :<input type="text" name="alamat_lemari"><br>
    Telepon :<input type="text" name="telp_lemari"><br>
    Deskripsi :<input type="text" name="deskripsi_lemari"><br>
    Tanggal :<input type="date" name="tanggal_lemari"><br>
    Harga :<input type="number" name="harga_lemari"><br>
    Gambar :<input type="file" name="image_lemari"><br>

    <input type="submit" value="Save">
</form>