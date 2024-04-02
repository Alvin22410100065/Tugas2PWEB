<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="mycss1.css">
</head>
<body>
<body>
<div>
  <form action="Tugas1.php">
    <label for="kode">Kode</label>
    <input type="text" id="kode" name="kode" placeholder="Masukkan Kode">

    <label for="namabarang">Nama Barang</label>
    <input type="text" id="namabarang" name="namabarang" placeholder="Masukkan Nama Barang">

    <label for="satuan">Satuan</label>
    <input type="text" id="satuan" name="satuan" placeholder="Masukkan Satuan">

    <label for="hargabeli">Harga Beli</label>
    <input type="text" id="hargabeli" name="hargabeli" placeholder="Masukkan Harga Beli">
  
    <label for="hargajual">Harga Jual</label>
    <input type="text" id="hargajual" name="hargajual" placeholder="Masukkan Harga Jual">
    <input type="submit" value="Submit">
    <a href="Tugas1.php" target="_self"><i class="fas fa-save buttoniconsave" input type="update" value="Update" name="update">  Update</i></a>
  <a href="Tugas1.php" target="_self"><i class="fas fa-trash-alt buttonicondelete" input type="delete" value="Delete" name="delete">  Delete</i></a>
  <a href="Tugas1.php" target="_self"><i class="fas fa-times buttoniconcancel"input type="cancel" value="Cancel" name="cancel">  Cancel</i></a>
  </form>
</div>

</body>
</html>