<?php
    $foo = 10;          // $foo is an integer
    $bar = (bool) $foo; // $bar is a boolean

    var_dump($bar);

    echo "<p>--------------------------</p>";

    $foo = 10;            // $foo is an integer
    $str = "$foo";        // $str is a string
    $fst = (string) $foo; // $fst is also a string

    // This prints out that "they are the same"
    if ($fst === $str) {
        echo "they are the same", PHP_EOL;
    }

    echo "<p>--------------------------</p>";

    $a = 'car'; // $a is a string
    $a[0] = 'b';   // $a is still a string
    echo $a;       // bar

    echo "<p>--------------------------</p>";

    
?>