
<?php
$fruits=["りんごは"=>"300円です。","みかんは"=>"150円です。","ももは"=>"3000円です。"];

foreach ($fruits as $key=> $value) {
    echo $key;
    echo $value;
    echo'<br />';
}

echo $fruits[0];
echo '<br />';
echo $fruits[1];
echo '<br />';
echo $fruits[2];
echo '<br />';




?>