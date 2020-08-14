<!DOCTYPE html>
<html>
    <head>
        <title>Galerica</title>
        <link rel="stylesheet" type="text/css" href="src/view/galerica-style.css">
        <link rel="stylesheet" href="src/view/fontawesome/css/all.css">
        <link rel="stylesheet" href="src/model.php">
        <!-- <link rel="stylesheet" href="src/view/css/bootstrap.css"> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            #produk-pilihan, #testimoni{
                padding-top: 15px;
                padding-bottom: 15px;
                padding-left: 35px;
                padding-right: 35px;
            }
            #produk-baru{
                background: #413c3c;
                padding-top: 30px;
                padding-bottom: 35px;
            }
        </style>
    </head>
    <body>
        <div id=div1>
            <img id=img1 src="src/view/images/batik1.png" alt="image" height=120px width=200px>
            <a href="galerica-controller.php" style="text-decoration: none;">
                <img id=logo src="src/view/images/logo.png" alt="logo" height=160px width=350px>
            </a>
            <img id=img2 src="src/view/images/batik3.png" alt="image" height=120px width=200px>
            <ul id=ul1 class="menu">
                <a href="galerica-controller.php#produk-baru" style="text-decoration: none;">
                    <li id=li1 class="menu-item">
                        <i class="fas fa-star"></i>
                        <span><strong>PRODUK BARU</strong></span>
                    </li>
                </a>
                <a href="galerica-controller.php#produk-pilihan" style="text-decoration: none;">
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
                        <a href="src/controller/pakaian-wanita-controller.php" style="text-decoration: none;">
                            <li id=li2 class="menu-item sub-menu-item">PAKAIAN WANITA</li>
                        </a>
                        <a href="src/controller/pakaian-pria-controller.php" style="text-decoration: none;">
                            <li id=li2 class="menu-item sub-menu-item">PAKAIAN PRIA</li>
                        </a>
                    </ul>
                </li>
                <a href="galerica-controller.php#testimoni" style="text-decoration: none;">
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
                        <a href="src/controller/toko-offline-controller.php" style="text-decoration: none;">
                            <li id=li2 class="menu-item sub-menu-item">TOKO OFFLINE</li>
                        </a>
                        <a href="src/controller/toko-online-controller.php" style="text-decoration: none;">
                            <li id=li2 class="menu-item sub-menu-item">TOKO ONLINE</li>
                        </a>
                    </ul>
                </li>
            </ul>
        </div>

        <div id=div2>
            <div id=produk-pilihan>
                <table id=table1 width=100% align=center>
                    <tr>
                        <td style="border-bottom: 5px solid #413c3c;">&nbsp;</td>
                        <td rowspan=2 width=20px>&nbsp;</td>
                        <td rowspan=2 width=575px>
                            J&nbsp;&nbsp;U&nbsp;&nbsp;N&nbsp;&nbsp;E&nbsp;&nbsp;'&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;H&nbsp;&nbsp;O&nbsp;&nbsp;I&nbsp;&nbsp;C&nbsp;&nbsp;E
                        </td>
                        <td rowspan=2 width=20px>&nbsp;</td>
                        <td style="border-bottom: 5px solid #413c3c;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <br>

                <table id=table2 width=850px align=center>
                    <tr>
                        <td id=td1>
                            <table>
                                <?php
                                    foreach($isiPakaian as $data){
                                        if($data["pilihan"] == 1){
                                            echo "<tr><td id=td3 style='padding-left:120px'>$data[nama]</td></tr>";
                                            echo "<tr><td id=td4>$data[deskripsi]</td></tr>";
                                        }
                                    }
                                ?>
                                <tr>
                                    <td id=td5>
                                        <a href="src/controller/produk-controller.php?no=<?php foreach($isiPakaian as $data){ if($data['pilihan']==1){echo $data['no'];}}?>" style="text-decoration: none; color: #714445;">
                                            SELENGKAPNYA ···
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <?php
                            foreach($isiPakaian as $data){
                                if($data["pilihan"] == 1){
                                    echo "<td id=td2 rowspan=3><img src='src/view/$data[image]' alt='image' width=300px height=450px></td>";
                                }
                            }
                        ?>
                    </tr>
                </table>
                <br>

                <table id=table3 width=850px align=center>
                    <tr>
                        <?php
                            foreach($isiPakaian as $data){
                                if($data["pilihan"] == 2){
                                    echo "<td id=td2 rowspan=3><img src='src/view/$data[image]' alt='image' width=300px height=450px></td>";
                                }
                            }
                        ?>
                        <td id=td6>
                            <table>
                                <?php
                                    foreach($isiPakaian as $data){
                                        if($data["pilihan"] == 2){
                                            echo "<tr><td id=td3 style='padding-right:150px'>$data[nama]</td></tr>";
                                            echo "<tr><td id=td4>$data[deskripsi]</td></tr>";
                                        }
                                    }
                                ?>
                                <tr>
                                    <td id=td5>
                                        <a href="src/controller/produk-controller.php?no=<?php foreach($isiPakaian as $data){ if($data['pilihan']==2){echo $data['no'];}}?>" style="text-decoration: none; color: #714445;">
                                            ··· SELENGKAPNYA
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <br>

                <table id=table2 width=850px align=center>
                <tr>
                        <td id=td1>
                            <table>
                                <?php
                                    foreach($isiPakaian as $data){
                                        if($data["pilihan"] == 3){
                                            echo "<tr><td id=td3 style='padding-left:120px'>$data[nama]</td></tr>";
                                            echo "<tr><td id=td4>$data[deskripsi]</td></tr>";
                                        }
                                    }
                                ?>
                                <tr>
                                    <td id=td5>
                                        <a href="src/controller/produk-controller.php?no=<?php foreach($isiPakaian as $data){ if($data['pilihan']==3){echo $data['no'];}}?>" style="text-decoration: none; color: #714445;">
                                            SELENGKAPNYA ···
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <?php
                            foreach($isiPakaian as $data){
                                if($data["pilihan"] == 3){
                                    echo "<td id=td2 rowspan=3><img src='src/view/$data[image]' alt='image' width=300px height=450px></td>";
                                }
                            }
                        ?>
                    </tr>
                </table>
                <br><br>
            </div>

            <div id=produk-baru>
                <table id=table5 width=100% align=center>
                    <tr>
                        <td>
                            P&nbsp;&nbsp;R&nbsp;&nbsp;O&nbsp;&nbsp;D&nbsp;&nbsp;U&nbsp;&nbsp;K&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B&nbsp;&nbsp;A&nbsp;&nbsp;R&nbsp;&nbsp;U
                        </td>
                    </tr>
                </table>
                <br>
                <table id=table6 width=850px align=center>
                    <tr>
                        <?php
                            foreach($isiPakaian as $data){
                                if($data["baru"] == 1){
                                    echo "<td id=td14>";
                                        echo "<a href='src/controller/produk-controller.php?no=$data[no]' style='text-decoration: none; color: white;'>";
                                            echo "<table width=175px align=center>";                                    
                                                echo "<tr><td id=td12><img src='src/view/$data[image]' alt='image' width=175px height=220px></td></tr>";
                                                echo "<tr><td id=td13>$data[nama]</td></tr>";

                                            echo "</table>";
                                        echo "</a>";
                                    echo "</td>";
                                }
                            }
                        ?>
                    </tr>
                </table>
            </div>

            <div id=testimoni>
                <table id=table1 width=100% align=center>
                    <tr>
                        <td style="border-bottom: 5px solid #413c3c;">&nbsp;</td>
                        <td rowspan=2 width=20px>&nbsp;</td>
                        <td rowspan=2 width=455px>
                            T&nbsp;&nbsp;E&nbsp;&nbsp;S&nbsp;&nbsp;T&nbsp;&nbsp;I&nbsp;&nbsp;M&nbsp;&nbsp;O&nbsp;&nbsp;N&nbsp;&nbsp;I
                        </td>
                        <td rowspan=2 width=20px>&nbsp;</td>
                        <td style="border-bottom: 5px solid #413c3c;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <br>
                <table id=table4 width=850px align=center>
                    <tr>
                        <td width=37.5px>&nbsp;</td>
                        <?php
                            foreach($isiTestimoni as $data){
                                echo "<td id=td7 width=275px>
                                    <br>
                                    <table>
                                        <tr>
                                            <td><img src='src/view/$data[image]' width=250px height=350px></td>
                                        </tr>
                                        <tr>
                                            <td id=td8>$data[nama]</td>
                                        </tr>
                                        <tr>
                                            <td id=td9>$data[usia]</td>
                                        </tr>
                                        <tr>
                                            <td id=td10><i>$data[pekerjaan]</i></td>
                                        </tr>
                                        <tr>
                                            <td id=td11>$data[komentar]</td>
                                        </tr>
                                    </table>
                                    <br>
                                </td>";
                                echo"<td width=37.5px>&nbsp;</td>";
                            }
                        ?>
                    </tr>
                </table>
                <br><br>
            </div>

            <div id=div5 style="background-image: url(src/view/images/batikfooter.png)">
                &nbsp;
            </div>
            <div id=div6>
                <b>Galerica</b> merupakan bagian dari <b>H1051181030's Project</b> yang dikembangkan oleh <b>Caecilia</b>.<br><br>
                Proyek ini bertujuan untuk mengembangkan kebudayaan batik di dunia perdagangan digital.<br>
                Mari bergabung dan mulailah memakai batik dengan bangga!
            </div>
            <div id=div7>
                    © 2019-2020 Caecilia Cantica Gita Mileniae Ahen
            </div>
        </div>

    </body>
</html>