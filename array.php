<?php
$food=array("apple","orange","banana","coconut");
foreach($food as $f){
    echo $f . " ";
}
echo "<br>";
array_push($food,'pineapple','peach');//add at the end
foreach($food as $f){
    echo $f . " ";
}
echo "<br>";
array_pop($food);//removes the last elements
foreach($food as $f){
    echo $f . " ";
}
echo "<br>";
array_shift($food);//removes the first elements in an array
foreach($food as $f){
    echo $f . " ";
}
echo "<br>";
$reversedArray=array_reverse($food);//reversese the array and returns the new array 

echo count($food);
foreach($reversedArray as $f){
    echo $f . "<br>";
}
?>