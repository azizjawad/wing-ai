<?php
require_once "../config/conn.php";

$id = $_GET['id'];

if (isset($id) && is_numeric($id)) {

    $sql = "SELECT * FROM business where id = $id";

    $result = $mysqli->query($sql);

    $row = $result->fetch_array(MYSQLI_ASSOC);

    exit(json_encode(['status' => true, 'data' => $row]));
}
exit(json_encode(['status' => false]));
