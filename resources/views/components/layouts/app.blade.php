<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>{{ $title ?? 'Moda Express' }}</title>
</head>

<body>
    <div class="d-flex">
        <div class="sidebar">
            <div class="logo d-flex align-items-center gap-3 ">
                <div class="icon-box">
                    <i class="bi bi-shop"></i>
                </div>
                <div>
                    <h6 class="mb-0 fw-semibold">Moda Express</h6>
                </div>
            </div>
            <div class="nav-section-title">Menu principal</div>
            <nav class="nav flex-column px-2">
                <a href="#" class="nav-link"><i class="bi bi-bag-plus"></i>Cadastrar Produtos</a>
                <a href="#" class="nav-link"><i class="bi bi-bag-heart"></i>Produtos</a>
                <a href="#" class="nav-link"><i class="bi bi-reception-4"></i>Gestão de Estoque</a>
                <a href="#" class="nav-link"><i class="bi bi-cart4"></i>Carrinho de compras</a>
                <a href="#" class="nav-link"></a>
            </nav>
            <div class="flex-grow-1 d-flex flex-column">
                <header class="header">
                    <div class="d-flex align-items-center gap-3">
                        <h5 class="mb-0 fw-semibold">Inicio</h5>
                    </div>
                </header>
                <main class="main-content">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>

</html>
