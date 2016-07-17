<?php

//////////local variable///////////
$x = 4;
function assignx () {
    $x = 0;
    print "\$x inside function is $x.
";
}
assignx();
print "\$x outside of function is $x.
";

/////// function parameter ////////
function multiply ($value) {
    $value = $value * 10;
    return $value;
}

$retval = multiply (10);
Print "Return value is $retval\n";


////// global variable ///////////

$somevar = 15;
function addit() {
    GLOBAL $somevar;
    $somevar++;
    print "Somevar is $somevar\n";
}
addit();


///////// static variable ////////

function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "<br>";
}
keep_track();
keep_track();
keep_track();



?>