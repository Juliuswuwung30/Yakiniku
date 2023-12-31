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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <style>
        .image-stack {
            position: relative;
        }

        .image-stack__item {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; /* Set to 100% to cover the entire width of the column */
            height: 100%; /* Set to 100% to cover the entire height of the column */
            z-index: -1; /* Set a negative value to make the image appear behind the content */
        }

        .text-box {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-top: 20px;
            z-index: 1; /* Ensure text box appears on top of the image */
        }

        /* Adjust the max-width of the image */
        .image-stack__item img {
            max-width: 100%; /* Set to 100% to make the image responsive */
            height: auto;
        }

        .yakiniku-section {
            padding-bottom: 20px; /* Adjust the value as needed for the desired padding */
        }
    </style>

</head>

<body class="bg-gray-100" style="height: 100vh">
    <div class="navbar navbar-expand-sm bg-body-tertiary bg-primary-subtle">
        <div class="px-4"><img src="{{ url('/images/logo1.png') }}" class="p-1" style="height:100px" /></div>
        <h1 style="font-family: Agbalumo; font-size: 500%; color:#800000" >Yakiniku At Home</h2>

    </div>

        
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary-subtle">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- Navigation -->
                        <a @if ($currentPage == 'All') class="nav-link active" 
                            @else
                            class="nav-link" @endif
                            aria-current="page" href="/" style="font-size: 150%">All</a>
                    </li>
                    <li class="nav-item">
                        <a @if ($currentPage == 'Sapi') class="nav-link active"
                            @else
                            class="nav-link" @endif
                            href="/produk-sapi" style="font-size: 150%">Sapi</a>
                    </li>
                    <li class="nav-item">
                        <a @if ($currentPage == 'Ayam') class="nav-link active"
                            @else
                            class="nav-link" @endif
                            href="/produk-ayam" style="font-size: 150%">Ayam</a>
                    </li>
                    <li class="nav-item">
                        <a @if ($currentPage == 'Ikan') class="nav-link active"
                            @else
                            class="nav-link" @endif
                            href="/produk-ikan" style="font-size: 150%">Ikan</a>
                    </li>
                    <li class="nav-item">
                        <a @if ($currentPage == 'Snacks') class="nav-link active"
                            @else
                            class="nav-link" @endif
                            href="/produk-snacks" style="font-size: 150%">Snacks</a>
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
