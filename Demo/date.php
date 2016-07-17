<?php
print time();
?>

<?php
$date_array = getdate();
print_r(getdate());

foreach ( $date_array as $key => $val )
{
    print "$key = $val\n";
}
$formated_date  = "Today's date: ";
$formated_date .= $date_array[mday] . "/";
$formated_date .= $date_array[mon] . "/";
$formated_date .= $date_array[year];

print $formated_date;
?>

<?php
/*
    Format	Description	Example
    a	'am' or 'pm' lowercase	pm
    A	'AM' or 'PM' uppercase	PM
    d	Day of month, a number with leading zeroes	20
    D	Day of week (three letters)	Thu
    F	Month name	January
    h	Hour (12-hour format - leading zeroes)	12
    H	Hour (24-hour format - leading zeroes)	22
    g	Hour (12-hour format - no leading zeroes)	12
    G	Hour (24-hour format - no leading zeroes)	22
    i	Minutes ( 0 - 59 )	23
    j	Day of the month (no leading zeroes	20
    l (Lower 'L')	Day of the week	Thursday
    L	Leap year ('1' for yes, '0' for no)	1
    m	Month of year (number - leading zeroes)	1
    M	Month of year (three letters)	Jan
    r	The RFC 2822 formatted date	Thu, 21 Dec 2000 16:01:07 +0200
    n	Month of year (number - no leading zeroes)	2
    s	Seconds of hour	20
    U	Time stamp	948372444
    y	Year (two digits)	06
    Y	Year (four digits)	2006
    z	Day of year (0 - 365)	206
    Z	Offset in seconds from GMT	+5
*/
?>


<?php
print date("m/d/y G.i:s\n", time());
print "Today is ";
print date("j of F Y, \a\\t g.i a", time());

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

// date_default_timezone_set("America/New_York");
// echo "The time is " . date("h:i:sa");
?>