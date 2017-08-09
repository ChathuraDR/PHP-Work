<?php
/**
 * Created by PhpStorm.
 * User: ChathuraDR
 * Date: 8/9/2017
 * Time: 1:18 PM
 */

include 'include.php';
/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>'; */
//save the session variable to general variable for this page
$formData = $_SESSION['formData'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP fundamentals : sessions</title>
</head>
<body>
<form>
    First name: <input type="text" name="firstname" value="<?=$formData['firstname']?>"><br>
    Last name: <input type="text" name="lastname" value="<?=$formData['lastname']?>"><br>
    <p>you chose <?php foreach($formData['vehicle'] as $selected):?> <?=$selected?> <?php endforeach;?> as vehicles</p>
</form>

</body>
</html>