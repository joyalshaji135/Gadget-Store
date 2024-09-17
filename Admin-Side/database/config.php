<?php

$connection = new mysqli("localhost","root","","gadget_db");
if (!$connection) {
    die(mysqli_error($connection));
}


?>
