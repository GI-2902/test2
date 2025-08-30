<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は、" . $name . "ですね";

echo "<br/>";

$set = htmlspecialchars($_POST['merc'], ENT_QUOTES);
print "ご希望の商品は、" . $set;

echo "<br/>";

$num = htmlspecialchars($_POST['num'], ENT_QUOTES);
print "注文数は、" . $num;
