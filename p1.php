<?php

    echo "Hello World!";

    echo PHP_EOL;

    $name = "John Doe";
    $age = 23;
    $email = "john@doe.com";
    $isMale = true;
    $isFemale = true;
    $priceOfPaperToday = 3.4; // camel case
    $is_male = true; //snake case
    // $is-female = true; //kebab case
 

    echo "Hey I am ". $name . "and I am ". $age . " years old";

    echo PHP_EOL;

    echo "Hey I am $name and I am $age years old";
    echo PHP_EOL;
    echo "Hey I am {$name} and I am {$age} years old";



    echo PHP_EOL;
    echo $name;
    echo "\n";
    echo $age;
    echo "\n";
    echo $email;
    echo "\n";
    
?>