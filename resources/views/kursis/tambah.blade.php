<h1>Tambah Meja</h1>

<form action="/kukursi" method="POST" enctype="multipart/form-data">
    @csrf
    Nama :<input type="text" name="nama_kursi"><br>
    Alamat :<input type="text" name="alamat_kursi"><br>
    Telepon :<input type="text" name="telp_kursi"><br>
    Deskripsi :<input type="text" name="deskripsi_kursi"><br>
    Tanggal :<input type="date" name="tanggal_kursi"><br>
    Harga :<input type="number" name="harga_kursi"><br>
    Gambar :<input type="file" name="image_kursi"><br>

    <input type="submit" value="Save">
</form>