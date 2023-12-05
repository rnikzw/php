<?php

function outputNumber($a){
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(2);

echo "<br>";


?>

<?php

echo "<br>";

function outputHello(){
    echo "Hello world";
}

outputHello();

echo "<br>";

?>

<?php
function text($number1, $number2){
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 4);
echo $total;

echo "<br>";

?>

<?php

echo "<br>";
function num($num1,$num2){
    $val = $num1 + $num2;
    return $val;
}

$result = num(2,3);
echo $result;
echo "<br>";
?>

<?php 

echo "<br>";
function point($score1,$score2,$score3){
    $total = $score1 + $score2 + $score3;
    // return $total;

    if ($total > 210){
        echo "合計点は" . $total . "なので合格です";
        
    }else{
        echo "合計点は" . $total . "なので不合格です";
    }
}


echo point(80,90,70);
echo "<br>";
?>

<?php

echo "<br>";
function triangle($bottom,$height){
    return $bottom * $height/2;
}

function square($bottom, $height){
    return $bottom * $height;
}

function trapezoid($top,$bottom,$height){
    return ($top + $bottom)*$height/2;
}

echo triangle(5,3) . "<br>";
echo square(3,5) . "<br>";
echo trapezoid(3,5,5) . "<br>";

?>




