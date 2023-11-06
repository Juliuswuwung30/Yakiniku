<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yakiniku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="bg-gray-100">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgb(255, 67, 67);">
        <div class="px-4"><img src="325445-removebg-preview.png" class="p-1" style="height:50px;"/></div>
        <div class="input-group input-group-sm p-3">
            <!-- Searchbar -->
            <input type="search" class="form-control" style="width: 1000px;" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">Search</button>
          </div>
          <div class="px-4">
            <!-- favorite Button -->
            <a href="/Favorite">
          <button type="submit" class="btn btn-danger btn-lg" href="/Favorite"><span class="bi bi-heart-fill"></span></button>
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