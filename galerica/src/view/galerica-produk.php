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
    </head>
    <body>
        <?php
            include("galerica-header.php");
        ?>
        <div id=div2>
            <div id=div3>
                <table id=table6 width=850px align=center style='padding-top: 40px;'>
                    <tr>
                        <td width=300px rowspan=7 style="vertical-align: top;">
                            <table align=left>
                                <tr>
                                    <td id=td2 width=100%>
                                        <?php
                                            foreach($isiProduk as $data){
                                                if($data["no"] == $data['no']){
                                                echo "<img src='../view/$data[image]' alt='image' width=300px height=450px>";
                                                }
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id=td21 colspan=3 height=140px>
                            <?php
                                foreach($isiProduk as $data){
                                    echo "$data[nama]";
                                }
                            ?>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td id=td22 colspan=3 style="padding-bottom: 15px; text-align: justify;">
                            <?php
                                foreach($isiProduk as $data){
                                    echo "$data[deskripsi]";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id=td22 width=70px height=25px>
                            Jenis
                        </td>
                        <td id=td17 width=7px>
                            :
                        </td>
                        <td id=td23>
                            <?php
                                foreach($isiProduk as $data){
                                    echo "$data[jenis]";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id=td22 height=25px>
                            Bahan
                        </td>
                        <td id=td17>
                            :
                        </td>
                        <td id=td23>
                            <?php
                                foreach($isiProduk as $data){
                                    echo "$data[bahan]";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id=td22 height=25px>
                            Ukuran
                        </td>
                        <td id=td17>
                            :
                        </td>
                        <td id=td23>
                            <?php
                                foreach($isiProduk as $data){
                                    echo "$data[ukuran]";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id=td22 height=25px>
                            Harga
                        </td>
                        <td id=td17>
                            :
                        </td>
                        <td id=td23>
                            <?php
                                foreach($isiProduk as $data){
                                    echo "$data[harga]";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id=td24 colspan=3 style="text-align: center;">
                            <?php
                                foreach($isiProduk as $data){
                                    echo "<a href='$data[shopee]' target='_blank' style='text-decoration: none;'>";
                                        echo "<button class='shopee-1' style='outline: none;'>";
                                            echo "Beli sekarang di Shopee";
                                        echo "</button>";
                                    echo "</a>";
                                }
                            ?>
                            &nbsp;
                            <?php
                                foreach($isiProduk as $data){
                                    echo "<a href='$data[tokopedia]' target='_blank' style='text-decoration: none;'>";
                                        echo "<button class='tokopedia-1' style='outline: none;'>";
                                            echo "Beli sekarang di Tokopedia";
                                        echo "</button>";
                                    echo "</a>";
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>

            <?php
               include("galerica-footer.php");
            ?>
        </div>
    </body>
</html>