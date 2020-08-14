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
                <table id=table1 width=100% align=center>
                    <tr>
                        <td style="border-bottom: 5px solid #413c3c;">&nbsp;</td>
                        <td rowspan=2 width=20px>&nbsp;</td>
                        <td rowspan=2 width=570px>
                            T&nbsp;&nbsp;O&nbsp;&nbsp;K&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;N&nbsp;&nbsp;L&nbsp;&nbsp;I&nbsp;&nbsp;N&nbsp;&nbsp;E
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
                <table width=850px align=center style="text-align: center;">
                    <tr>
                        <?php
                            foreach($isiTokoOnline as $data){
                                if($data["toko"] == "Shopee"){
                                    echo "<td style='padding-left: 30px; padding-right: 30px; padding-top: 10px;'>";
                                        echo "<table>";
                                            echo "<tr>";
                                                echo "<td id=td18>";
                                                    echo "<img src='../view/images/$data[image]' width=75px>";
                                                echo "</td>";
                                                echo "<td id=td18>";
                                                    echo "$data[nama]";
                                                echo "</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<td id=td19 colspan=2>";
                                                    echo "<a href='$data[link]' target='_blank' style='text-decoration: none;'>";
                                                        echo "<button class='shopee' style='outline:none;'>";
                                                            echo "Beli sekarang di $data[toko]";
                                                        echo "</button>";
                                                    echo "</a>";
                                                echo "</td>";
                                            echo "</tr>";
                                        echo "</table>";
                                    echo "</td>";
                                }
                            }
                            foreach($isiTokoOnline as $data){
                                if($data["toko"] == "Tokopedia"){
                                    echo "<td style='padding-left: 30px; padding-right: 30px; padding-top: 10px;'>";
                                        echo "<table>";
                                            echo "<tr>";
                                                echo "<td id=td18>";
                                                    echo "<img src='../view/images/$data[image]' width=150px style='margin-top: -20px; margin-bottom: -20px;'>";
                                                echo "</td>";
                                                echo "<td id=td20>";
                                                    echo "$data[nama]";
                                                echo "</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<td id=td19 colspan=2>";
                                                    echo "<a href='$data[link]' target='_blank' style='text-decoration: none;'>";
                                                        echo "<button class='tokopedia' style='outline:none;'>";
                                                            echo "Beli sekarang di $data[toko]";
                                                        echo "</button>";
                                                    echo "</a>";
                                                echo "</td>";
                                            echo "</tr>";
                                        echo "</table>";
                                    echo "</td>";
                                }
                            }
                        ?>
                    </tr>
                </table>
            </div>
            <br><br>
            <?php
               include("galerica-footer.php");
            ?>
        </div>
    </body>
</html>