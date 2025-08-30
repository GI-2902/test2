<?php

$people = array('Taro','Jiro','Saburo');
var_dump($people);

$people = array(
    'a' => '咲音',
    'b' => 'ダスル',
    'c' => '真梨子'
);

var_dump($people);

echo "<br/>";

$people = [
    [
        "last_name" => "ダスル",
        "first_name" => "ソ",
        "age" => "24" 
    ],
    [
        "last_name" => "咲音",
        "first_name" => "西",
        "age" => "34" 
    ],
    [
        "last_name" => "真梨子",
        "first_name" => "梅山",
        "age" => "34" 
    ],
    [
        "last_name" => "智菜",
        "first_name" => "山岸",
        "age" => "28" 
    ],
    [
        "last_name" => "瞳",
        "first_name" => "西村",
        "age" => "34" 
    ]
    
    ];

    foreach($people as $key => $sex){
        echo $sex["first_name"]."<br/>";
    }

    