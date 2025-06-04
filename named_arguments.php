<?php
    function add_some_extra(&$string)
    {
        $string .= 'and something extra.';
    }

    $str = 'This is a string, ';
    add_some_extra($str);
    echo $str;    // outputs 'This is a string, and something extra.'

    echo "<p>----------------------------------</p>";

    function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
    {
        $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
        return "Making a cup of ".join(", ", $types)." with $device.\n";
    }
    echo makecoffee();
    echo "<br>";
    echo makecoffee(array("cappuccino", "lavazza"), "teapot");
?>