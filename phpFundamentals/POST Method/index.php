<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP fundamentals : POST Method</title>
    <style type="text/css">
        /* ID Selector */
        #test {
            padding: 50px 0px 0px 0px;
        }
    </style>
</head>
<body>
  <div id="test">
      <form action="action.php" method="POST">
          <fieldset>
              <legend>Personal information:</legend>
              First name:<br>
              <input type="text" name="firstname">
              <br>
              Last name:<br>
              <input type="text" name="lastname"><br>
              <!-- In order for php to recognize more than 1 value in a checkbox scenario we have to add squre brackets in the name inside the HTML-->
              <input type="checkbox" name="vehicle[]" value="Bike"> I have a bike
              <input type="checkbox" name="vehicle[]" value="Car" checked="checked"> I have a car<br><br>
              <input type="submit" value="Submit">
          </fieldset>
      </form>
  </div>

</body>
</html>
