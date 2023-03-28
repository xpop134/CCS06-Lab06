<?php
$year = $argv[2];
$name = $argv[1];


function countage($tobecomputed)
{
    $yeartoday = date("Y");




    $crntage = $yeartoday - $tobecomputed;
    $message = " and your age is $crntage years old";
    $message1 = "You are a Senior";
    $message2 = "You are a Voter";


    echo $message;
    echo $message1;
    echo $message2;
}


echo "Your name is $name,";
countage($year);
?>
