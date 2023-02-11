
<?php
$fruits=["りんごは"=>"apple","みかんは"=>"orange","ももは"=>"peach"];

foreach ($fruits as $key=> $value) {
 echo $key;
 echo $value;
 echo'<br />';
}

$fruits=["りんご", "みかん","もも",];
echo $fruits[0];
echo '<br />';
echo $fruits[1];
echo '<br />';
echo $fruits[2];
echo '<br />';

var_dump($fruits);

function getPrice($fruits,$number) {

    $fee = $fruits * $number;
    return $fee;
    }
