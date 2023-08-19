<!DOCTYPE html>
<html >
    <head>
        <title>table</title>
    </head>
    <body>
     <form action="<?php echo $_SERVER['PHP_SEIF']?>" method="post">
     NAME:
     <input type="text" name="fname"><br>
     AGE:
     <input type="text" name="age"><br>
     <input type="submit" name="save">
</form> 
<?php
if(isset($_POST['save'])){
    echo $_POST['fname']."<br>";
    echo $_POST['age']."<br>";
    

}
?>
     </body>
    </html> 