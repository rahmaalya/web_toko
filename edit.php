<?php
    $id = (int) $_GET ['id'];
    include 'config.php';
    $sql= "SELECT * FROM produk INNER JOIN buku ON produk.id_produk=buku.id_produk WHERE produk.id_produk= '$id' ";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);

?>

<form action="" method= "POST">
        <input type="hidden" name="id" value= "<?php= $data[id_produk]?>">
        <label for="nama_produk"> Nama Produk</label>
        <input type="text" name= "nama_produk" value= "<?= $data['nama_produk'] ?>">
    <br>
        <label for="jenis_produk"> Jenis Produk</label>
        <input type="text" name= "jenis_produk"  value= "<?php= $data['jenis_produk'] ?>">
    <br>
        <label for="nama_barang"> Nama Barang</label>
        <input type="text" name= "nama_barang"  value= "<?php= $data['nama_buku'] ?>">
    <br>
        <label for="penulis"> Penulis</label>
        <input type="text" name= "penulis"  value= "<?php= $data['penulis'] ?>">
    <br>
         <label for="penerbit"> Penerbit</label>
        <input type="text" name= "penerbit"  value= "<?php= $data['penerbit'] ?>">
    <br>
         <label for="harga"> Harga</label>
        <input type="text" name= "harga"  value= "<?php= $data['harga'] ?>">
    <br>
      
    <input type="Submit" value= "Simpan">
</form>

    <?php
    
        if ($_POST) {
            $sql = "UPDATE produk SET  nama_produk = '{$_POST['nama_produk']}',
                                        jenis_produk= '{$_POST['jenis_produk']}'
                                      WHERE id_produk= '{$_POST['id']}'";
            $query = mysqli_query ($koneksi, $sql);

            $sql = "UPDATE buku SET nama_buku = '{$_POST['nama_barang']}',
                                    penulis= '{$_POST[nama_barang]}',"
        }
    
    ?>