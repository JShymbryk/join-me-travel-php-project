<?php/**
 * Created by PhpStorm.
 * User: n01121228
 * Date: 10/31/2016
 * Time: 12:40 PM
 */

include "header.php";?>
<?php
session_start();

$expire = new DateTime('-1 month');
setcookie('id', '', $expire->getTimestamp(), "/", "localhost", false, true);
//setcookie('password', '', $expire->getTimestamp(), "/", "localhost", false, true);


echo isset($_SESSION['joinMeTravel']) ?  $_SESSION['joinMeTravel'] :  "not found";


//destroy username session variable
unset($_SESSION['joinMeTravel']);

session_destroy();

header("Location:mainMainPage.php?action=login");
?>


<?php include "footer.php"?>

