<?php
/**
 * Created by PhpStorm.
 * User: ChathuraDR
 * Date: 8/9/2017
 * Time: 2:48 AM
 */


echo '<pre>';
print_r($_POST);
echo '<pre>';
$name = "Chathura";

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP fundamentals</title>
</head>
<body>
<form>
    First name: <input type="text" name="firstname" value="<?=$_POST['firstname']?>"><br>
    Last name: <input type="text" name="lastname" value="<?=$_POST['lastname']?>"><br>
    <p>you chose <?php foreach($_POST['vehicle'] as $selected):?> <?=$selected?> <?php endforeach;?> as vehicles</p>
</form>

</body>
</html>

