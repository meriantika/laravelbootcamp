<!DOCTYPE html>
<html>
<head>
    <title>Toko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Toko</a>
        <div>
            <a href="/kategori" class="text-white me-3">Kategori</a>
            <a href="/produk" class="text-white">Produk</a>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
