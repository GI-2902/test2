<?php

function Fuck($i){
    return $i;
}

$ans = Fuck(5);
echo $ans;

echo "<br/>";

function calc($score1,$score2,$score3){
    $total=$score1+$score2+$score3;
    if($total >210){
        echo "合計点は".$total."なので合格です";
    }
    else{
        echo "合計点は".$total."なので不合格です";
    }
}

echo calc(100,100,100);

echo "<br/>";
echo "<br/>";

function tri($height,$bottom){
    $men1=$height*$bottom/2;
    return $men1;
}    
function sq($height,$bottom){
    $men2=$height*$bottom;
    return $men2;
}
function dai($height,$bottom,$top){ 
    $men3=($top+$bottom)*$height/2; 
    return $men3;
}

echo "三角形の面積は".tri(3,4)."<br/>";
echo "四角形の面積は".sq(4,5)."<br/>";
echo "台形の面積は".dai(4,6,5)."<br/>";

   
