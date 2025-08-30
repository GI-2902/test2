<?php
$num1 = 15;
$num2 = 3;
$num3 = 5;
$ans1 = $num1 + 3;
$ans2= $num1-3;
$ans3=$num1*3;
$ans4=$num1/3;
echo $ans1;
echo "<br/>";
echo $ans2;
echo "<br/>";
echo $ans3;
echo "<br/>";
echo $ans4;
echo "<br/>";

$num1 /= $num3;
$num2 *=$num3;
echo $num1;
echo "<br/>";
echo $num2;
echo "<br/>";

$a = 20;
$b = 5;

$result = $a > $b;

echo $result;

echo "<br/>";

echo ($a > 10 && $a <30);

echo "<br/>";

$a = 10;

echo "<br/>";
echo $a;
echo "<br/>前置は計算してから代入";
echo ++$a;
echo "<br/>";
echo $a;


echo "<br/>";
echo "<br/>";
$a = 10;

echo "<br/>";
echo $a;
echo "<br/>後置は代入してから計算";
echo $a++;
echo "<br/>";
echo $a;