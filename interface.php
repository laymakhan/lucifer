<DOCTYPE html>
  <html>
    <body>
      <?php
interface car {
  public function brand();
}

class truck implements car 
{
  public function brand() 
  {
    echo "ek number";
  }
}

$car = new truck();
$car->brand();
?>
</body>
</html>