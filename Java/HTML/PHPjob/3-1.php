
<?php

for($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {  # $iが3の倍数かつ5の倍数
      print "Fizz,Buzz<br>";
    } elseif ($i % 3 == 0) {  # $iが3の倍数(かつ、5の倍数でない)
      print "Fizz<br>";
    } elseif ($i % 5 == 0) {  # $iが5の倍数(かつ、3の倍数でない)
      print "Buzz<br>";
    } else {  # $iが3の倍数でも5の倍数でもない
      print $i . "<br>";
    }
  }



?>