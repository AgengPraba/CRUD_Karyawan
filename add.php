<?php

  include ('classes/Karyawan.php');
  $karyawan=new Karyawan();

  if($_SERVER['REQUEST_METHOD']=='POST'){
    $add=$karyawan->addKaryawan($_POST);
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

  <title>Tambah Data Karyawan</title>
</head>

<body>
  <div class="container">
    <br /><br />
    <div class="row d-flex justify-content-center">
      <div class="col-md-7">
        <div class="card shadow-sm">
          <?php 
          if(isset($add)){
            ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?= $add ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
          } 
          ?>
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <h3>Tambah Data Karyawan</h3>
              </div>
              <div class="col-md-6">
                <a href="index.php" class="btn btn-info float-right">Show Karyawan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" /> <br>
            <label for="">Jenis kelamin(P/L)</label>
            <input type="text" name="j_kel" class="form-control" /> <br>
            <label for="">Tanggal lahir(YYYY-MM-DD)</label>
            <input type="text" name="tgl_lahir" class="form-control" /> <br>
            <input type='submit' name='add' value='add' class='btn btn-success form-control'>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src=" https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>
</body>

</html>