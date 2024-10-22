<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section class="container mt-5">
        <h1 class="bg-warning px-1 rounded shadow-lg p-3 py-2  " style="width: max-content;">Confirmation Page</h1>

        <?php
    include 'Koneksi.php';

            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
            $gender = htmlspecialchars($_POST['gender']);
            $date = htmlspecialchars($_POST['date']);

            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            if (!empty($hobbies)) {
                echo "<p>Hobbies: " . implode(", ", array_map('ucwords', $hobbies)) . "</p>";
            } else {
                echo "<p>Hobbies: None</p>";
            }
            $genderString = $gender == "male" ? "Laki - Laki" : "Perempuan";
            echo "<p>Gender: $gender</p>";
            echo "<p>Date of Birth: $date</p>";

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $hobbiesString = implode(", ", $hobbies);
                $sql = "INSERT INTO data_klien (nama, email, hobi, gender, tanggal_lahir)
                VALUES ('$name', '$email', '$hobbiesString', '$gender', '$date')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Data berhasil dimasukkan ke database!');</script>";
                } else {
                    $error_message = $conn->error;
                    echo "<script>alert('Error: " . addslashes($error_message) . "');</script>";
                }
            }
            $conn->close();
            
        ?>

        <a href="Kontak.php" class="btn btn-warning mt-4 ">Submit</a>
    </section>

</body>
</html>