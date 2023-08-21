<!DOCTYPE html>
<html>
    <body>
        <?php
        class A 
        {
            public $base="hello world";
        }
        function display(A $object)
        {
            echo $object->base;

        }
        display (new A());
        ?>
    </body>
</html>