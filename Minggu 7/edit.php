<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>

<?php include_once "menu.php"; ?>

<div class="container">
 
        <h2>Input Biodata Mahasiswa</h2>
        <div class="row mb-2">
            <div class="col-sm-12">    
                <span class="m-1">                
                    <a href="viewall.php" class="btn btn-info" role="button">Kembali</a>
                </span>
            </div> 
        </div>
    <?php
    include "koneksi.php";
    include "fungsi.php";
    $id = $namadepan = $namabelakang = $email ="";
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $id = bersihkan_input($_POST['id']);
        $namadepan = bersihkan_input($_POST['namadepan']);
        $namabelakang = bersihkan_input($_POST['namabelakang']);
        $email = bersihkan_input($_POST['email']);

        $strSQL = "UPDATE mahasiswa SET 
        nama_depan='$namadepan',
        nama_belakang='$namabelakang',
        email='$email'
        WHERE id='$id'";

        //echo "Query = ".$strSQL;
        $execStrSQL = mysqli_query($conn, $strSQL);
        if ($execStrSQL){
            echo "<b>Data berhasil</b> diperbarui ke dalam database";
        }
        else {
            echo "<b> Data tidak berhasil</b> diperbarui ke dalan database";
            echo "<br> Error: ".$execStrSQL. "<br>".mysqli_error($conn);
        }
    }
    else{
       if(isset($_GET['id'])){
            $id = bersihkan_input($_GET['id']);
            $strSQL = "SELECT * FROM mahasiswa WHERE id='$id'";
            $execStrSQL = mysqli_query($conn, $strSQL);
            if (mysqli_num_rows($execStrSQL)) {
            while ($row = mysqli_fetch_assoc($execStrSQL)) {
                $namadepan = $row['nama_depan'];
                $namabelakang = $row['nama_belakang'];
                $email = $row['email'];    
            }
        } 
      }
    }

    ?>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">        
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th><input type="text" class="form-control" name="id" value="<?= $id ?>" readonly></th>       
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nama Depan</td>        
            <td><input type="text" class="form-control" name="namadepan" value="<?= $namadepan?>"></td>       
        </tr>
        <tr>
            <td>Nama Belakang</td>        
            <td><input type="text" class="form-control" name="namabelakang" value="<?= $namabelakang?>"></td>       
        </tr>
        <tr>
            <td>Email</td>        
            <td><input type="text" class="form-control" name="email" value="<?= $email ?>"></td>       
        </tr>
        </tbody>
    </table>
    <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">                
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </span>
        </div> 
    </div>
  </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>
