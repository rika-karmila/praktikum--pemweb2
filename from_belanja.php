<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>from</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="from_belanja.php" method="POST">
  <h4>BELANJA ONLINE</h4>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Produk Pilihan</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" value="Kirim" name="proses">
    </div>
  </div>
</form>
<div class="col-md-3" style="float:right">
  <div class="card">
    <h5 class="card-header"style="background-color:blue;">
        Daftar Harga
    </h5>
    <div class="card-body">
      <p class="card-text">
          TV : 4.200.000
      </p>

    </div>
    <div class="card-body">
      <p class="card-text">
          KULKAS : 3.100.000

      </p>

    </div>
    <div class="card-body">
      <p class="card-text">
         MESIN CUCI : 3.800.000
      </p>

    </div>
    <div class="card-footer"style="background-color:blue;">
      Harga Dapat Berubah Setiap Saat

    </div>

  </div>

</div>
<!-- Kode PHP -->
<?php

// Menangkap Data User
$proses = $_POST["proses"];
$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

//Buat variabel nangkap data

if ($produk == "tv") {
  $total = $jumlah * 4200000;
  } elseif ($produk == "kulkas") {
  $total = $jumlah * 3100000;
  } elseif ($produk == "mesincuci") {
  $total = $jumlah * 3800000;
  } else {
  $total =0;
}

echo '<br> Nama Customer :' . $customer;
echo '<br> Produk Pilihan :' . $produk;
echo '<br> Jumlah :' . $jumlah;
echo '<br> Total Belanja :' . $total;

?>
  
</body>
</html>