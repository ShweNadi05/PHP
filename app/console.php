<?php
    echo"Hello";
    echo"<br>";
    echo"This is very first of php assignment console file in app.";
?>
<?php
   $brand='Adidsa';
   $price=20000;
   $protomion=7;
   function amount ($price, $protomion)
   {
        return $price - (($protomion/100)*$price);
   }
   echo "The actual amount is" . amount ($price, $protomion);

   echo" <br>";
   $pi = 3.142;
   $radius = 30;
   function areaofsphere ($pi, $radius)
   {
        return (1/3)* $pi * ($radius*$radius);
   }
   echo "The area of sphere is" . areaofsphere ($pi, $radius);

   echo "<br>";

   $radius =20;
   function volumeofsphere ( $pi, $radius)
   {
        return (4/3) * $pi * ($radius**3);
   }
   echo "The volume of sphere is". volumeofsphere($pi, $radius);
   
   echo"<br>";   
   $name = "mg mg";
   $age = 30;
   echo "$name is $age years old.";

   echo"<br>";
   $brand = "adidas";
   $price = 20000;
   $protomion = 7;
   $amount = $price * ($protomion/100);


?>
