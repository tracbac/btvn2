<?php
//  for($i = 1; $i <= 100; $i ++) {
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo "Winner $i" . "<br>";
//     } else if ($i % 3 == 0) {
//         echo "failure $i" . "<br>";
//     } else if ($i % 5 == 0) {
//         echo "failure $i" . "<br>";
//     }
//     else if ($i % 2 == 0&& $i % 3 == 0&&$i % 5 == 0) {
//         echo "0-0 $i" . "<br>";
//     }
// }
// 2
// $i = 0;
// while ( $i < 20 ) {
//     echo "<br>";
//     $j = 0;
//     while ( $j < 30 ) {
//         echo "+";
//         $j ++;
//     }
//     $i ++;
// }
// 3
// $a = 0;
// $b = 1;
// $c = 10;
// $d = 20;
// $e = 30;
 

// function T($n) {
//     if ($n > 0) {
//         return $n * T ( $n - 1 );
//     } else {
//         return 1;
//     }
// }
 

// echo ("Giai thừa của " . $a . " là: " . T ( $a ) . "<br>");
// echo ("Giai thừa của " . $b . " là: " . T ( $b ) . "<br>");
// echo ("Giai thừa của " . $c . " là: " . T ( $c ) . "<br>");
// echo ("Giai thừa của " . $d . " là: " . T ( $d ) . "<br>");
// echo ("Giai thừa của " . $e . " là: " . T ( $e ) . "<br>");


///4

// function T($n) {
    
//     if ($n < 2) {
//         return false;
//     }
   
//     $squareRoot = sqrt($n);
//     for ($i = 2; $i <= $squareRoot; $i++) {
//         if ($n % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }
 
// $n = 100;
// echo ("Tất cả các số nguyên tố nhỏ hơn $n là: <br>");
// if ($n >= 2) {
//     echo "2";
// }
// for ($i = 3; $i < $n; $i+=2) {
//     if (T($i)) {
//         echo (" " . $i);
//     }
// }





///5

$n = 0;
if (isset ( $_POST ['n'] )) {
    $n = $_POST ['n'];
}

function phanTichSoNguyen($n) {
    $i = 2;
    $a = array ();
    $a [0] = "";
    $c = 0;
 
  
    while ( $n > 1 ) {
        if ($n % $i == 0) {
            $n = floor ( $n / $i );
            $a [$c] = $i;
            $c = $c + 1;
        } else {
            $i ++;
        }
    }
    
    if ($a [0] == "") {
        $a [0] = $n;
    }
    return $a;
}
 
?>
<form action="#" method="post">
 <table>
  <tr>
   <td>Nhập số </td>
   <td><input type="text" name="n" value="<?=$n?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Phân tích"></td>
  </tr>
 </table>
</form>
<br>
<?php
 
if (filter_var ( $n, FILTER_VALIDATE_INT )) {
    
    $a = phanTichSoNguyen ( $n );
    
    echo ("Kết quả: $n = ");
    $size = count ( $a );
 
    
    for($i = 0; $i < $size - 1; $i ++) {
        echo "$a[$i] x ";
    }
    echo $a [$size - 1];
} else {
    echo (" không hợp lệ");
}


?>