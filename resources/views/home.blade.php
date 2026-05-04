<!DOCTYPE html>
<html lang="id">
    <head>
        <title>Beranda UBeli</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>

        <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    </head>
    <body> 
        <div class="navbar-wrapper">
            <nav class="navbar">
                <div>
                    <a class="navbar-icon">U<span class="highlight">Beli</span></a>
                </div>
                <ul>
                    <li class="navbar-jualbarang">
                        <a href="{{ route('logout') }}"><i data-lucide="plus" class="icon-plus"></i>Jual Barang</a>
                    </li>
                </ul>
                <ul class="navbar-action">
                    <li><a href="#"><i data-lucide="heart"></i></a></li>
                    <li><a href="#"><i data-lucide="bell"></i></a></li>
                    <li><a href="#"><i data-lucide="messages-square"></i></a></li>
                    <li><a href="#"><i data-lucide="user"></i></a></li>
                </ul>
            </nav>
        </div>
        <a href="{{ route('logout') }}">Logout</a>  
        <script>
            lucide.createIcons();
            document.querySelectorAll('.ikon-plus').forEach(icon => {
            icon.removeAttribute('width');
            icon.removeAttribute('height');
        });
        </script>  
    </body>
</html>