<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
<body>

<?php include_once "menu.php"; ?>
<?php
include "koneksi.php";
?>
<div class="container">
  <h2>Biodata Mahasiswa</h2>
  <div class="row mb-2">
  <div class="col-sm-12">    
    <span class="m-1 ">
    <a href="tambah.php" class = "btn btn-info">Tambah Data</a> 
    </span>
  </div> 
</div>          
  <table id="example" class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
<?php
$strSQL ="SELECT * FROM mahasiswa"; // SELECT nim, nama_depan, nama_belakang, enmail FROM mahasiswa;
$execStrSQL = mysqli_query($conn,$strSQL);

if (mysqli_num_rows($execStrSQL) >0 ){
  while ($row = mysqli_fetch_assoc($execStrSQL)){
?>
      <tr>
        <td><a href="view.php?id=<?= $row['id'] ?>"><?= $row["id"]?></a></td>
        <td><?= $row["nama_depan"]?></td>
        <td><?= $row["nama_belakang"]?></td>
        <td><?= $row["email"]?></td>
        <td>
        <a href="edit.php?id=<?= $row['id'] ?>"class= "btn btn-primary" > Edit</a> 
        <button type="button" class="btn btn-danger">Hapus</button>
        </td>
      </tr>
<?php
  }
}
?>
    </tbody>
  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>
</body>
</html>
