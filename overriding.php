<!DOCTYPE html>
<html>
    <body>
        <?php
   class A 
   {
    function display()
    {
        echo"enjay it solutions\n";

    }
}
    class B extends A 
    {
        function show()
        {
            echo"the future of youngsters \n";
        }
        }
    $obj= new A;
    $obj=new B;
    $obj->display();
    $obj->show();
    
?>
</body>
</html>