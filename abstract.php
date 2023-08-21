<!DOCTYPE html>
<html>
  <body>
    <?php
    abstract class base
    {
        abstract function show();

    }
    class derived extends base
    {
        function show()
        {
            echo"this is abstract class";
        }
    }
    $obj= new derived();
    $obj->show();

?>
</body>
</html>