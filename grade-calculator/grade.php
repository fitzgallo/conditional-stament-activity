<?php
$grade = $_GET["grade"];

if($grade >= 90){
    echo "Grade A";
}elseif($grade >= 80 ){
    echo "Grade B";
}elseif($grade >= 70 ){
    echo "Grade C";
}elseif($grade >= 60){
    echo "Grade D";
}elseif($grade <= 60 ){
    echo "Grade F";
}

?>