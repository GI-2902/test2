<?php

$people = [
    [
        "name" => "Taro",
        "age" => "25",
        "sex" => "men"
    ],
    [
        "name" => "Jiro",
        "age" => "20",
        "sex" => "men"
    ],
    [
        "name" => "Hanako",
        "age" => "16",
        "sex" => "women"
    ]
   ];

foreach($people as $lists){
    echo $lists["name"].$lists["age"].$lists["sex"]."<br/>";
}