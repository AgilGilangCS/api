<h1>Tambah Meja</h1>

<form action="/mejas" method="POST" enctype="multipart/form-data">
    @csrf
    Nama :<input type="text" name="nama_meja"><br>
    Alamat :<input type="text" name="alamat_meja"><br>
    Telepon :<input type="text" name="telp_meja"><br>
    Deskripsi :<input type="text" name="deskripsi_meja"><br>
    Tanggal :<input type="date" name="tanggal_meja"><br>
    Harga :<input type="number" name="harga_meja"><br>
    Gambar :<input type="file" name="image_meja"><br>

    <input type="submit" value="Save">
</form>