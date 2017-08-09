<?php

include 'include.php';

$fieldError='';
//check whether the $_POST variable has any values or not
if (count($_POST)>0){
    if ($_POST['firstname'] != "" || $_POST['lastname'] != ""){

        //$_SESSION['formSubmitted'] = 'yes';
        $_SESSION['formData'] = $_POST;
        header('Location: final.php');
    }else{
        $fieldError = 'validation';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP fundamentals : Sessions</title>
    <link rel="stylesheet" href="myStyle.css">
</head>
<body>
  <div id="test">
      <form action="index.php" method="POST">
          <fieldset>
              <legend>Personal information:</legend>
              <div class="<?=$fieldError?>">
                   First name: <input type="text" name="firstname"><br>
                   Last name: <input type="text" name="lastname"><br><br>
              </div>
              <!-- In order for php to recognize more than 1 value in a checkbox scenario we have to add squre brackets in the name inside the HTML-->
              <input type="checkbox" name="vehicle[]" value="Bike"> I have a bike
              <input type="checkbox" name="vehicle[]" value="Car" checked="checked"> I have a car<br><br>
              <input type="submit" value="Submit">
          </fieldset>
      </form>
  </div>

</body>
</html>