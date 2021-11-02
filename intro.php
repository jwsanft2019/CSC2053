<?php include 'header.php';
echo "Hello world";

$name='jake';

echo "<br>hello ". $name;
echo "<br> hello $name<br>";

$array = array(1,2,3,4,5);
for($i = 0; $i<count($array); $i++) {
    echo $array[$i] . " ";
}

//associative array
$fav_food = array("Ben" => "ice cream", "Sam" => "pizza", "Bucky" => "tacos", "Sharon" => "cereal", "Jamie" => "pretzels");
foreach($fav_food as $key=>$val) {
    echo "$key 's favorite food is $val <br>";
}
?>