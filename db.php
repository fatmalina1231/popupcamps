<?php
// Opens a connection to a MySQL server.
$connection=mysqli_connect ("localhost", 'root', '','popup');
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}

// Sets the active MySQL database.
/*$db_selected = mysqli_select_db($connection,'popup');
if (!$db_selected) {
    die ('Can\'t use db : ' . mysqli_error($connection));
}*/