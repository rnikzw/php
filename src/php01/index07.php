<?php
$people = array('Tato','Jiro','Saburo');

var_dump($people);
echo "<br>";
echo $people[1];
?>

<?php

echo "<br>";
$people = array(
    "person1" => "Taro",
    "person2" => "Jiro",
    "person3" => "Saburo",
);

var_dump($people);
echo "<br>";
echo "<br>";

$human = [
    "human1" => "taro",
    "human2" => "jiro",
];

var_dump($human);
echo "<br>";
echo "<br>";
echo $people["person1"];
echo "<br>";



?>

<?php

echo "<br>";
$people = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"

    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
    ];

    echo $people[0]["last_name"];
echo "<br>";

?>


<?php
echo "<br>";

$people = array("Taro","Jiro","Saburo");

foreach ($people as $person){
    echo $person;
    echo "<br>";
}

?>


<?php
echo "<br>";

$people = array(
    "person1" => "Taro",
    "person2" => "Jiro",
    "person3" => "Saburo"
);

foreach ($people as $person => $name){
    print $person . "は" . $name . "です" . "<br>";

}

?>

<?php
echo "<br>";

$info = [
    // [
    //     $name => "Taro",
    //     $age => 25,
    //     $gender => "men"
    // ],[
    //     $name => "Jiro",
    //     $age => 20,
    //     $gender => "men"
    // ],[
    //     $name => "hanako",
    //     $age => 16,
    //     $gender => "woman"
    // ]

    ["Taro",25,"men"],
    ["Jiro",20,"men"],
    ["hanako",16,"women"]

    ];

foreach ($info as $information){
    echo $information[0] . '(' . $information[1] . "歳". $information[2] . ')' . "<br>";
}