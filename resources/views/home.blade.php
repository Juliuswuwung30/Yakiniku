<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yakiniku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="bg-gray-100 d-flex justify-content-center align-items-center" style="height: 100vh;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgb(255, 67, 67);">
        <!-- logo -->
        <div class="px-4">
            <img src="325445-removebg-preview.png" class="p-1 img-fluid" style="height: 60px;" />
        </div>
        <div class="input-group input-group-sm p-3">
            <!-- Searchbar -->
            <form action="search.php" method="get">
                <input type="text" name="q" placeholder="Search..." class="form-control">
                <input type="submit" value="Search" class="btn btn-outline-primary">
            </form>
        </div>
        <div class="px-4">
            <!-- favorite Button -->
            <a href="/Favorite">
                <button type="submit" class="btn btn-danger btn-lg" href="/Favorite"><span
                        class="bi bi-heart-fill"></span></button>
            </a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #43b1ff;">
        <div class="container-fluid ">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- Navigation -->
                        <a class="nav-link active" aria-current="page" href="/">Best Sellers</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link px-4" href="/ProdukSapi">Sapi</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link px-4" href="/ProdukAyam">Ayam</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link px-4" href="/ProdukIkan">Ikan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
