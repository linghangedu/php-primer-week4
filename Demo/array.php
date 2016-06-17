<?php
/**
 * Created by PhpStorm.
 * User: yj
 * Date: 6/08/15
 * Time: 10:39 PM
 */

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo count($cars);


for($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<br>";
}

///////////////////////////////////

/* First method to create array. */
$numbers = array( 1, 2, 3, 4, 5);
foreach( $numbers as $value )
{
    echo "Value is $value \n";
}
/* Second method to create array. */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach( $numbers as $value )
{
    echo "Value is $value \n";
}
?>
?>




<h2>associative arrays</h2>


<?php

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

///////////////////////////////////



/* First method to associate create array. */
$salaries = array(
    "mohammad" => 2000,
    "qadir" => 1000,
    "zara" => 500
);

echo "Salary of mohammad is ". $salaries['mohammad'] . "\n";
echo "Salary of qadir is ".  $salaries['qadir']. "\n";
echo "Salary of zara is ".  $salaries['zara']. "\n";

/* Second method to create array. */
$salaries['mohammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low";

echo "Salary of mohammad is ". $salaries['mohammad'] . "\n";
echo "Salary of qadir is ".  $salaries['qadir']. "\n";
echo "Salary of zara is ".  $salaries['zara']. "\n";
?>
?>



<h2>Multidimensional arrays</h2>
<?php
$marks = array(
    "mohammad" => array
    (
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
    ),
    "qadir" => array
    (
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
    ),
    "zara" => array
    (
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    )
);
/* Accessing multi-dimensional array values */
echo "Marks for mohammad in physics : " ;
echo $marks['mohammad']['physics'] . "\n";
echo "Marks for qadir in maths : ";
echo $marks['qadir']['maths'] . "\n";
echo "Marks for zara in chemistry : " ;
echo $marks['zara']['chemistry'] . "\n";
?>



