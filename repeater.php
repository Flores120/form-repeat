<?php
    $repeat_text = $_GET["input_text"];
    $numberR = $_GET["numberR_text"];
    $repeated_text = str_repeat($repeat_text, $numberR);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>String Repeating</title>
   </head>
   <body>
     <h2>Here you go!!</h2>
     <p><?php echo $repeated_text;?>&nbsp</p>
   </body>
 </html>
