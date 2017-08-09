<?php
/**
 * Created by PhpStorm.
 * User: ChathuraDR
 * Date: 8/9/2017
 * Time: 1:18 PM
 */

include 'include.php';

//save the sessionDestroy variable to general variable for this page
if (isset($_SESSION['formData'])){
    $formData = $_SESSION['formData'];
    //this will clear all sessionDestroy data.other way is unset(), this can be use for any function that has been set
    //session_destroy();
    unset($_SESSION['formData']);
}else{
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP fundamentals : SessionsDestroy</title>
</head>
<body>
<form>
    First name: <input type="text" name="firstname" value="<?=$formData['firstname']?>"><br>
    Last name: <input type="text" name="lastname" value="<?=$formData['lastname']?>"><br>
    <p>you chose <?php foreach($formData['vehicle'] as $selected):?> <?=$selected?> <?php endforeach;?> as vehicles</p>
</form>

</body>
</html>