<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>USA</h1>
        <?php
        require 'sourse.php';
        ?>
        <select>      
  <?php
      foreach ($us_state_abbrevs_names as $short_state => $full_name_state) {
echo '<option value = "' . $short_state . '">' . $full_name_state . '</option>' ;
}   
?>
        </select>
        <br>
<?php
    $n = count($us_state_abbrevs_names);
    echo $n;
?>
        
        
    </body>
</html>

