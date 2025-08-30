<?php

for($i =2;$i <= 10;$i=$i=$i+2){
    echo $i."<br/>";
}

$count=0;

while($count < 100){

    
    $count += 1;

    echo "\$count=".$count."<br/>";

    if($count == 20){
        break;
    }

}
echo "<br/>";

$count=0;

while($count < 100){
    if($count === 20){
        break;
    }
    if($count % 3 === 0 ){
         $count ++;
        continue;
    }
    echo "\$count=".$count."<br/>";
    $count ++;
}

echo "<br/>";
echo "<br/>";

$num=0;
do{
    
    If($num >= 3){
        break;
    }
    echo $num."がnum<br/>";
    $num++;

}while($num<100);

echo "<br/>";
echo "<br/>";

$a=1;

for($a=1;$a<=50;$a++){

    if($a %3 ==0 && $a %5 ==0){
        echo "FizzBuzz"."<br/>";
    }
    elseif($a %3 ==0 && $a %5 !=5){
        echo "Fizz"."<br/>";
    }
    elseif($a %3 !=0 && $a %5 ==0){
        echo "Buzz"."<br/>";
    }
    else{
        echo "\$aは".$a."<br/>";
    }
}


for($j=0;$j<5;$j++){

    echo "<br/>";
    for($i=0;$i<5;$i++){
        echo "●";
    }
}