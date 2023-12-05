<?php
for ($i = 0; $i<4; $i++){
    echo $i;
}

echo "<br>";

?>

<?php
echo "<php>";

for($i = 1; $i<=5; $i++){
    echo $i*2;
}

echo "<br>";

?>

<?php
$i = 0;

while($i < 3){
    echo "i=" . $i . "<br>";
    $i += 1;
}

?>

<?php
$count = 0;

while($count <20){
    $count += 1;
    echo $count . "<br>";
    
}

?>


<?php

echo "<br>";

$count = 0;

while($count <= 100){
    if ($count === 20){
        break;
    }
    if ($count%3 === 0){
        $count ++;
        continue;
    }
    echo $count . "<br>";
    $count++;
}

?>


<?php

echo "<br>";

$nume = 0;
do{
    echo "num =" . $nume . "<br>";
    $nume++;
}while($nume < 3);

?>

<?php

echo "<br>";
for($num = 1; $num <= 50 ;$num++) {
    if ($num%3 === 0 &&
     $num %5 === 0 ){
        echo "FizzBuzz". "<br>";
    }elseif($num %3 === 0){
        echo "Fizz" . "<br>";
    }elseif($num%5 === 0){
        echo "Buzz" . "<br>";
    }else{
        echo $num . "<br>";
    }

}

    ?>

    <?php


echo "<br>";

    for($i = 1; $i<6; $i++){
        for($n = 1; $n<6; $n++){
            echo "⚫︎";
        }
        echo "<br>";
    }