<html>
    <head>
        <title>PHP Test</title>
    </head>
<body>
    <?php
    $payment = 3000;
    $price = 800;
    $num = 3;
    $change = $payment - ($price * $num);

    echo "<table border = 1><tr><td> 단가 :  $price <br></td>";
    echo "<td>지불액 :  $payment  <br></td>";
    echo "<td>거스름돈 : $change <br></td>";
    echo "</tr></table>";
    echo "<br><br><br><br>";

    for ($i = 2, $j = 3, $k = 4; $i <= 8; $i+= 3, $j+= 3, $k+= 3) {
        for ($z = 1; $z <= 9; $z++) {
        echo ("$i x $z = " . ($i * $z) . "&nbsp;&nbsp;&nbsp;");
        echo ("$j x $z = " . ($j * $z) . "&nbsp;&nbsp;&nbsp;");
        if($k < 10){
        echo ("$k x $z = " . ($k * $z) . "&nbsp;&nbsp;&nbsp;");
        }echo "<br>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>