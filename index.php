<?php
include ('classes/Karyawan.php');
  $karyawan=new Karyawan();

  if(isset($_GET['del'])){
  $id = base64_decode($_GET['del']);
  $del = $karyawan->deleteKaryawan($id);
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

  <title>Data Karyawan</title>
</head>

<body>
  <div class="container">
    <br /><br />
    <div class="row d-flex justify-content-center">
      <div class="col-md-9">
        <div class="card shadow-sm">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <h3>Data Karyawan</h3>
              </div>
              <div class="col-md-6">
                <a href="add.php" class="btn btn-info float-right">Add Karyawan</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Action</th>
              </tr>
              <?php
                $viewKaryawan=$karyawan->viewKaryawan();
                  while($row=mysqli_fetch_assoc($viewKaryawan)){
                    ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['j_kel'] ?></td>
                <td><?= $row['tgl_lahir'] ?></td>
                <td>
                  <a href="edit.php?id=<?=base64_encode($row['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                  <a href="?del=<?= base64_encode($row['id'])?>" onclick="return confirm('Do you want to delete it?')"
                    class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
              <?php
                  }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>
</body>

</html>