<?php
require 'DBcon.php';
$order = "CustomerName";
$customerID = '';
$customerName = '';
/* create a prepared statement */
if ($stmt = $conn->prepare("SELECT CustomerID,CustomerName FROM customers ORDER BY ?")) {

    /* bind parameters for markers. i=integer d=double s=string */
    $stmt->bind_param("s",$order);
    /* execute query */
    $stmt->execute();
    /* bind result variables */
    $stmt->bind_result($customerID,$customerName);

    /* fetch value


    printf("%s is in district %s\n", $uName, $order);*/

    /* close statement
    $stmt->close();*/
}
/* close connection
$conn->close();*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP fundamentals : Retrieving data From a database and add them into drop down list</title>
    <style type="text/css">
        /* ID Selector */
        #test {
            padding: 50px 0px 0px 50px;
        }
    </style>
</head>
<body>


  <div id="test">
      <label>Favourite Author:</label>
      <select name="author">
          <?php while($row = $stmt->fetch()) :?>
          <option value="<?=$customerID?>"><?=$customerName?></option>
          <?php endwhile; ?>
      </select>
  </div>

</body>
</html>