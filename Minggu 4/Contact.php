<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="bg-light position-sticky w-100 shadow py-2">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 px-4 h1">Gabriel Davinche Manalu</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav d-flex gap-2 fs-6 h2">
                        <li class="nav-item">
                            <a class="nav-link" href="Dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.php"> About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-cureent="page" href=#> Contact Us </a>
                        </li>
                    </ul>
                </div>
        </nav>
    </header>


    <section class="container mt-2 align-items-center flex-column   ">
        <div class=" mt-5 mb-5">
            <h2> Tertarik untuk bergabung dengan kami?
                Hubungi Kami segera! </h2>
        </div>
        <h1 class="border-bottom border-2"> Contact Us</h1>
        <form class="mt-4">
            <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Your Email">
            </div>
            <div class="mb-3">
                <label class="form-label">Hobby</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="singing" id="singing">
                    <label class="form-check-label" for="singing">Singing</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="running" id="running">
                    <label class="form-check-label" for="running">Running</label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="eating" id="eating">
                    <label class="form-check-label" for="eating">Eating</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="Male" value="male" required>
                    <label class="form-check-label" for="Male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="Female" value="female"
                        required>
                    <label class="form-check-label" for="Female">Female</label>
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <footer class="bg-light text-center py-4 mt-5  border">
        <h2> Web Rekomendasi</h2>
        <ul class="d-flex justify-content-center gap-5 px-5">
            <a class="navbar-brand" href="https:www.google.com" target=_blank>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSTLNyHEp8ERADDJDy5wXQLoV_Lj0YTmv6eA&s"
                    alt="Logo" width="30" height="24" class="d-inline-block align-text-top ">
                Google
            </a>

            <a class="navbar-brand" href="https://www.microsoft.com/id-id" target=_blank>
                <img src="https://awsimages.detik.net.id/customthumb/2012/08/24/398/microsoftbaru.jpg?w=600&q=90"
                    alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Microsoft
            </a>
        </ul>
    </footer>


</body>

</html>