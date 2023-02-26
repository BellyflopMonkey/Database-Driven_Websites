<?php

   $data["first"] = "Jason";
   $data["last"] = "Bolfert";
   $data["age"] = 41;
   $data["city"] = "Hartford";
   $data["state"] = "WI";
   echo "This is the data in the array: \r\n";
   echo "<br>";
   print_r($data);
   echo "<br><br>";
   echo "This shows the key and the value for each element in the array:";
   echo "<br>";
   var_dump($data);
   echo "<br><br>";
   echo "This calls a specific element in the array:<br>";
   echo $data["first"];
?>   