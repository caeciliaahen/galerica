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
                        <td rowspan=2 width=590px>
                            T&nbsp;&nbsp;O&nbsp;&nbsp;K&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;F&nbsp;&nbsp;F&nbsp;&nbsp;L&nbsp;&nbsp;I&nbsp;&nbsp;N&nbsp;&nbsp;E
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
                <table width=850px align=center>
                    <tr>
                        <?php
                            foreach($isiTokoOffline as $data){
                                echo "<td colspan=4 style='border: 2px solid #c4c4c4; text-align: center; padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 5px;'>";
                                    echo "<img src='../view/images/$data[image]' alt='image' width=830px>";
                                echo "</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <td id=td16>
                            Galerica Pontianak
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px; padding-right: 30px; padding-top: 10px; text-align: justify">
                            <table>
                                <?php
                                    foreach($isiTokoOffline as $data){
                                        echo "<tr>";
                                            echo "<td id=td17 width=80px>";
                                                echo "<b>Alamat</b>";
                                            echo "</td>";
                                            echo "<td id=td17 width=3px>";
                                                echo "<b>:</b>";
                                            echo "</td>";
                                            echo "<td id=td17 colspan=2>";
                                                echo "$data[alamat]";
                                            echo "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                            echo "<td id=td17>";
                                                echo "<b>Buka</b>";
                                            echo "</td>";
                                            echo "<td id=td17>";
                                                echo "<b>:</b>";
                                            echo "</td>";
                                            echo "<td id=td17 width=75px>";
                                                echo "Senin<br>";
                                                echo "Selasa<br>";
                                                echo "Rabu<br>";
                                                echo "Kamis<br>";
                                                echo "Jumat<br>";
                                                echo "Sabtu<br>";
                                                echo "Minggu";
                                            echo "</td>";
                                            echo "<td id=td17>";
                                                echo "$data[senin]<br>";
                                                echo "$data[selasa]<br>";
                                                echo "$data[rabu]<br>";
                                                echo "$data[kamis]<br>";
                                                echo "$data[jumat]<br>";
                                                echo "$data[sabtu]<br>";
                                                echo "$data[minggu]";
                                            echo "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                            echo "<td id=td17>";
                                                echo "<b>Telepon</b>";
                                            echo "</td>";
                                            echo "<td id=td17>";
                                                echo "<b>:</b>";
                                            echo "</td>";
                                            echo "<td id=td17 colspan=2>";
                                                echo "$data[telepon]";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <?php
               include("galerica-footer.php");
            ?>
        </div>
    </body>
</html>