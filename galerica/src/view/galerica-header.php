<!DOCTYPE html>
<html>
    <head>
        <title>Galerica</title>
        <link rel="stylesheet" type="text/css" href="../view/galerica_style.css">
        <link rel="stylesheet" href="../view/fontawesome/css/all.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
    <div id=div1>
            <img id=img1 src="../view/images/batik1.png" alt="image" height=120px width=200px>
            <a href="../../galerica-controller.php" style="text-decoration: none;">
                <img id=logo src="../view/images/logo.png" alt="logo" height=160px width=350px>
            </a>
            <img id=img2 src="../view/images/batik3.png" alt="image" height=120px width=200px>
            <ul id=ul1 class="menu">
                <a href="../../galerica-controller.php#produk-baru" style="text-decoration: none;">
                    <li id=li1 class="menu-item">
                        <i class="fas fa-star"></i>
                        <span><strong>PRODUK BARU</strong></span>
                    </li>
                </a>
                <a href="../../galerica-controller.php#produk-pilihan" style="text-decoration: none;">
                    <li id=li1 class="menu-item">
                        <i class="fas fa-heart"></i>
                        <span><strong>PRODUK PILIHAN</strong></span>
                    </li>
                </a>
                <li id=li1 class="menu-item has-child">
                    <i class="fas fa-tshirt"></i>
                    <span><strong>KOLEKSI</strong></span>
                    <i class="fas fa-chevron-down bawah"></i>
                    <ul class="menu sub-menu">
                        <a href="../controller/pakaian-wanita-controller.php" style="text-decoration: none;">
                            <li id=li2 class="menu-item sub-menu-item">PAKAIAN WANITA</li>
                        </a>
                        <a href="../controller/pakaian-pria-controller.php" style="text-decoration: none;">
                            <li id=li2 class="menu-item sub-menu-item">PAKAIAN PRIA</li>
                        </a>
                    </ul>
                </li>
                <a href="../../galerica-controller.php#testimoni" style="text-decoration: none;">
                    <li id=li1 class="menu-item">
                        <i class="fas fa-users"></i>
                        <span><strong>TESTIMONI</strong></span>
                    </li>
                </a>
                <li id=li1 class="menu-item has-child">
                    <i class="fas fa-store-alt"></i>
                    <span><strong>TOKO</strong></span>
                    <i class="fas fa-chevron-down bawah"></i>
                    <ul class="menu sub-menu">
                        <a href="../controller/toko-offline-controller.php" style="text-decoration: none;">
                            <li id=li2 class="menu-item sub-menu-item">TOKO OFFLINE</li>
                        </a>
                        <a href="../controller/toko-online-controller.php" style="text-decoration: none;">
                            <li id=li2 class="menu-item sub-menu-item">TOKO ONLINE</li>
                        </a>
                    </ul>
                </li>
            </ul>
        </div>
    </body>
</html>