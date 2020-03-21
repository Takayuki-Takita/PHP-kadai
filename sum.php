<?php
function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
?>

// 課題1
<?php
function double($max){
    $result = 0;
    $result = $max * 2;
    return $result;
}
echo double(55);
echo "\n"
?>

// 課題2
<?php
function f($a,$b){
    $result = 0;
    $result = $a + $b;
    return $result;
}
echo f(500,18);
echo "\n"
?>

// 課題3
<?php
function multi($arr){
    $result = 1;
    foreach($arr as $value){
        $result = $result * $value;
    }
    return $result;
}
echo multi(array(1,3,5,7,9));
echo "\n"
?>

// 課題4
<?php
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
        
    }
    return $max_number;
}
echo max_array(array(1,2,30,4,5));
echo "\n";
?>

//課題5
<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

echo strip_tags($text, '<p><a>');

?>

<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n"
?>

<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "\n"
?>

<?php
date_default_timezone_set('UTC');

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

echo date('c', mktime(1, 2, 3, 4, 5, 2006));
echo "\n"
?>

<?php
date_default_timezone_set('UTC');


echo date("l");

echo date('l jS \of F Y h:i:s A');

echo "\n"
?>