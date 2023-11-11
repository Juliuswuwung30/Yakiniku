<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yakiniku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</head>

<body class="bg-gray-100" style="height: 100vh">
    <div class="navbar navbar-expand-sm bg-body-tertiary bg-primary-subtle">
        <div class="px-4"><img src="{{ url('/images/logo1.png') }}" class="p-1" style="height:100px" /></div>
        <!-- Searchbar -->
        <div class="input-group input-group-sm p-3 container-sm">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
            <button type="button" class="btn btn-primary">search</button>
        </div>
        <div class="px-4">
            <!-- favorite Button -->
            <a href="/Favorite">
                <button type="submit" class="btn btn-danger btn-lg"><span class="bi bi-heart-fill"></span></button>
            </a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary-subtle">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- Navigation -->
                        <a @if ($currentPage == 'All') class="nav-link active" 
                            @else
                            class="nav-link"
                            @endif aria-current="page"
                            href="/">All</a>
                    </li>
                    <li class="nav-item">
                        <a @if ($currentPage == 'Sapi') class="nav-link active"
                            @else
                            class="nav-link" @endif
                            href="/produk-sapi">Sapi</a>
                    </li>
                    <li class="nav-item">
                        <a @if ($currentPage == 'Ayam') class="nav-link active"
                            @else
                            class="nav-link" @endif
                            href="/produk-ayam">Ayam</a>
                    </li>
                    <li class="nav-item">
                        <a @if ($currentPage == 'Ikan') class="nav-link active"
                            @else
                            class="nav-link" @endif
                            href="/produk-ikan">Ikan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('layout_contect')
    </div>
</body>


</html>

