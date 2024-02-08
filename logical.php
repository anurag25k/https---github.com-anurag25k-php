<?php
//logical operator \
$temp=25;
$cloudy=true;
if($temp>=0 && $temp<=30){
    echo"The weather is good <br>";
}
else{
    echo"The weather is bad <br>";
}
if ($cloudy) {
    echo"It is sunny <br>";
}

$age=18;
$citizen=true;
if(!$age>=18 || !$citizen){
    echo"You cannot vote <br>";
}
else{
    echo"You can vote <br>";
}

?>