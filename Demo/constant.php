<?php
define("MINSIZE", 50);

echo MINSIZE;
echo "<br>";
echo constant("MINSIZE"); // same thing as the previous line


   class trick
   {
      function doit()
      {
        echo "<br>";
        echo __FUNCTION__;
    }
    function doitagain()
    {
        echo "<br>";
        echo __METHOD__;
    }
}
$obj=new trick();
$obj->doit();
$obj->doitagain();

?>