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
  <form action="" method="post">
    <h2>Hapus Biodata Mahasiswa</h2>
    <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">
            <button type="submit" class="btn btn-danger">
                Simpan
            </button>
            </span>
        </div> 
    </div>          
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nama</th>
            <th><input type="hidden" name="nama"></th>       
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Email</td>        
            <td><input type="hidden" name="email"></td>       
        </tr>
        </tbody>
    </table>
  </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>
