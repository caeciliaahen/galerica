<!DOCTYPE html>
<html>
    <head>
        <title>Galerica</title>
        <link rel="stylesheet" type="text/css" href="../view/galerica-style.css">
        <link rel="stylesheet" href="../view/fontawesome/css/all.css">
        <link rel="stylesheet" href="../../model.php">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            .row {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                max-width: 850px;
            }
            .col-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
                padding-bottom: 30px;
            }
            #tampilData{
                padding-left: 12.5px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 18px;
                text-align: left;
                color: #2f2c2c;
            }
            #buttonTampilData{
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 17px;
                background-color: #2f2c2c;
                color:white;
                border: none;
                text-align: center;
                vertical-align: middle;
                border-radius: 25px;
            }
            #searchBar{
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 18px;
                background-color: white;
                color:#2f2c2c;
                border-top: none;
                border-left: none;
                border-right: none;
                border-color: #2f2c2c;
                border-width: 0,5px;
                width: 472.5px;
                opacity: 1;
                outline: none;
                text-align: left;
            }
            #searchButton{
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 20px;
                background-color: white;
                color:#2f2c2c;
                border: none;
                text-align: center;
                vertical-align: middle;
                outline: none;
            }
            #search{
                text-align: right;
                padding-right: 7.5px;
            }
            #searchButton:hover{
                opacity: 0.8;
            }
        </style>
    </head>
    <body>
        <?php
            include("galerica-header.php");
        ?>
        <div id=div2>
            <div id=div3>
                <table id=table1 width=100% align=center>
                    <tr>
                        <td style="border-bottom: 5px solid #413c3c;">&nbsp;</td>
                        <td rowspan=2 width=20px>&nbsp;</td>
                        <td rowspan=2 width=580px>
                            P&nbsp;&nbsp;A&nbsp;&nbsp;K&nbsp;&nbsp;A&nbsp;&nbsp;I&nbsp;&nbsp;A&nbsp;&nbsp;N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P&nbsp;&nbsp;R&nbsp;&nbsp;I&nbsp;&nbsp;A
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
                <table width=850px align=center style="margin-bottom: 30px;">
                    <tr>
                        <?php
                            if ($isiHalamanAktif==$isiJumlahHalaman){
                                $awalData = $isiAwalData + 1;
                                echo "<td id=tampilData>";
                                    echo "Menampilkan <button id=buttonTampilData disabled> $awalData-$isiJumlahData2 </button> dari $isiJumlahData2 <i class='fas fa-angle-double-right'></i>";
                                echo "</td>";
                            }
                            else{
                                $awalData = $isiAwalData + 1;
                                $akhirData = $isiAwalData + 12;
                                echo "<td id=tampilData>";
                                    echo "Menampilkan <button id=buttonTampilData disabled> $awalData-$akhirData </button> dari $isiJumlahData2 <i class='fas fa-angle-double-right'></i>";
                                echo "</td>";
                            }
                        ?>
                        <td id=search>
                            <form action="../controller/search-pakaian-pria-controller.php" method="post">
                                <input required type="text" name="searchBar" placeholder="Cari Produk" size="105" id="searchBar">
                                <input type="submit" name="searchButton" value="CARI" id="searchButton">
                            </form>
                        </td>
                    </tr>
                </table>
                <div align=center style="padding-bottom: 10px;">
                    <div class="row" align=center>
                        <?php 
                        foreach ($isiPakaianPria as $data) {?>
                        
                            <div class="col-3" id="boxproduk">
                                <a href="../controller/produk-controller.php?no=<?php echo $data['no'];?>" style='text-decoration: none; color: black;'>
                                    <?php
                                        echo "<table id=table7 align=center width=170px height=310px>";
                                            echo "<tr>";
                                                echo "<td id=td25>";
                                                    echo "<img src='../view/$data[image]' alt='image' width=150px height=200px;>";
                                                echo "</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<td id=td26 title='$data[nama]'>";
                                                    if (strlen($data['nama'])>27){
                                                        echo substr($data['nama'], 0, 26)."...";
                                                    }
                                                    else
                                                        echo "$data[nama]";
                                                echo "</td>";
                                            echo "</tr>";
                                        echo "</table>";
                                    ?>
                                </a>
                            </div>
                    
                        <?php } ?>
                    </div>
                </div>
                <table id=table6 width=850px align=center>
                    <tr>
                        <?php
                            $halamanSebelumnya = $isiHalamanAktif - 1;
                            $halamanSelanjutnya = $isiHalamanAktif + 1;
                            if ($isiHalamanAktif==1){
                                echo "<td id=td27>";
                                    echo "<i class='fas fa-chevron-circle-left'></i> Halaman Sebelumnya";
                                echo "</td>";
                            }
                            else{
                                echo "<td id=td29>";
                                    echo "<a href='pakaian-pria-controller.php?page=$halamanSebelumnya' style='text-decoration: none; color: black;'>";
                                        echo "<i class='fas fa-chevron-circle-left'></i> Halaman Sebelumnya";
                                    echo "</a>";
                                echo "</td>";
                            }
                            if ($isiHalamanAktif==$isiJumlahHalaman){
                                echo "<td id=td28>";
                                    echo "Halaman Selanjutnya <i class='fas fa-chevron-circle-right'></i>";
                                echo "</td>";
                            }
                            else{
                                echo "<td id=td30>";
                                    echo "<a href='pakaian-pria-controller.php?page=$halamanSelanjutnya' style='text-decoration: none; color: black;'>";
                                        echo "Halaman Selanjutnya <i class='fas fa-chevron-circle-right'></i>";
                                    echo "</a>";
                                echo "</td>";
                            }
                        ?>
                    </tr>
                </table>
            </div>
            <?php
               include("galerica-footer.php");
            ?>
        </div>
    </body>
</html>