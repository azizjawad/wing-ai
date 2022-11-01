<?php

require_once "../config/conn.php";

$sql = "SELECT * FROM business";

$result = $mysqli->query($sql);

$row = $result -> fetch_all(MYSQLI_ASSOC);

$x = 0;

foreach ($row as $key){
    $id = $key['id'];
    $row[$x++]['action'] = "<a class='edit-business' href='javascript:' data-id='$id'>Edit</a>";
}

exit(json_encode(["data" => $row]));

