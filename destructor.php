<!DOCTYPE html>
<html>
<body>

<?php
class tree
{
    function __construct()
    {
        echo"this is a banyan tree";
        $this->name ="neem tree";
    }
    function __destruct()
    {
        echo"destroy this nonsence things". $this->name. "\n";
    }
    }
    $obj=new tree();   //constructor is called
?>
</body>
</html>