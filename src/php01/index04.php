<?php
$a = 5;

if ($a == 5) {
    echo "\$aは5です";
} else {
    echo "\$aは5ではありません";
}

echo "<br>";

?>

<?php

echo "<br>";
$a = 7;

if ($a === 5) {
    echo "\$aは5です";
} else {
    echo "\$aは5以外です";
}

echo "<br>";

?>


<?php
echo "<br>";

$a = 7;

if ($a === 5) {
    echo "\&aは5です";
} elseif ($a === 7) {
    echo "\$aは7です";
} else {
    echo "\$aは5でも7でもありません";
}

echo "<br>";
?>

<?php
echo "<br>";

$people = "Saburo";

switch ($people) {
    case "Taro";
        echo "太郎です";
        break;

    case "Jiro";
        echo "二郎です";
        break;

    case "Saburo";
        echo "三郎です";
        break;

    case "Shiro";
        echo "四郎です";
        break;

    default:
        echo " この兄弟のにはいません";
}

echo "<br>";
?>


<?php
echo "<br>";

$a = 7;

$a = ($a === 7) ? "TRUE" : "FALSE";
echo $a;
echo "<br>";
?>