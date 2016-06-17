<?php
$string1="Hello World";
$string2="1234";
echo $string1 . " " . $string2;
echo "\n";

echo strlen("Hello world!");
echo "\n";

echo strpos("Hello world!","world");
echo "\n";

echo substr("Hello world",2 ,6);
echo "\n";

echo substr("Hello world",-1);
echo "\n";

?>



<?php
//explode
$str = 'one,two,three,four';

// zero limit
var_dump (explode(',',$str,0));

// positive limit
print_r(explode(',',$str,2));

// negative limit
print_r(explode(',',$str,-1));
?>

<?php
//implode
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."\n";
echo implode("+",$arr)."\n";
echo implode("-",$arr)."\n";
echo implode("X",$arr);
?>

<?php
echo strtoupper("Hello WORLD!");
echo strtolower("Hello WORLD.");
echo ucwords("hello world");
?>


<?php
echo strcmp("Hello","Hello");
echo "\n";

echo strcmp("Hello","hELLo");
echo "\n";

echo strcasecmp("Hello","hELLo");
echo "\n";

echo strcmp("Hello world!","Hello"); // string1 is greater than string2
echo strcmp("Hello world!","Hello world! Hello!"); // string1 is less than string2
?>

<?php

$content = "Hello world";
$offColor = "Hello";
$content = str_replace($offColor, "Goodbye", $content);

?>

<?php
    $content = "Hello world     ";
    echo trim($content);
?>




<?php

$sting_sample = "some string here";

$channel =<<<_XML_
<channel>
<title>What's For Dinner<title>
<link>http://menu.example.com/<link>
<description>Choose what to eat tonight".</description>
</channel>
_XML_;

echo <<<END
This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
<br />
END;

print $channel;

?>