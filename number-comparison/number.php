<?php
$input1 = $_GET["input1"];
$input2 = $_GET["input2"];

if($input1 > $input2){
    echo $input1 ."is Greater than to" . $input2;
}elseif($input1 < $input2){
    echo $input1 . "is Less than to" . $input2;
}elseif($input1 == $input2){
    echo $input1 . "is Equal to " . $input2;

}
?>