<h1>Tambah Meja</h1>

<form action="/lainnyas" method="POST" enctype="multipart/form-data">
    @csrf
    Nama :<input type="text" name="nama_lainnya"><br>
    Alamat :<input type="text" name="alamat_lainnya"><br>
    Telepon :<input type="text" name="telp_lainnya"><br>
    Deskripsi :<input type="text" name="deskripsi_lainnya"><br>
    Tanggal :<input type="date" name="tanggal_lainnya"><br>
    Harga :<input type="number" name="harga_lainnya"><br>
    Gambar :<input type="file" name="image_lainnya"><br>

    <input type="submit" value="Save">
</form>