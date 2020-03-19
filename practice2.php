//課題1
<?php
$name = "滝田";
if ($name == "滝田") {
    echo "私は".$name."です。";
} else {
    echo $name."ではありません。";
}
?>

//課題2
<?php
$total = null;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
?>

//課題3
<?php
$fruits = array("apple", "orange", "pineapple", "banana", "lemon");
foreach($fruits as $fruit){
    echo "\n".$fruit;
}
?>

//課題4
<?php
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  if($i % 5 == 0){
    echo "\n".$i;
  }
}
?>