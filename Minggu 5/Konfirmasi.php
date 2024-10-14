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
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
            $gender = htmlspecialchars($_POST['gender']);
            $date = htmlspecialchars($_POST['date']);

            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Date of Birth: $date</p>";

            
            if (!empty($hobbies)) {
                echo "<p>Hobbies: " . implode(", ", $hobbies) . "</p>";
            } else {
                echo "<p>Hobbies: None</p>";
            }
            echo "<p>Gender: $gender</p>";
        ?>

        <a href="Konfirmasi.php" class="btn btn-warning mt-4 ">Submit</a>
    </section>

</body>
</html>