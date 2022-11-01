<?php

require_once "../config/conn.php";

if (isset($_POST['id'])){

    $id    = intval($_POST['id']);
    $assistant_type = trim($_POST['assistant_type']);
    $business_name = trim($_POST['business_name']);
    $business_start_date = trim($_POST['business_start_date']);
    $business_type = trim($_POST['business_type']);
    $plan = trim($_POST['plan']);

    if (is_not_empty_fields([$id,$assistant_type,$business_name,$business_start_date,$business_type,$plan])) {

        $sql = "UPDATE business SET 
                    assistant_type= '$assistant_type',
                    business_name = '$business_name',
                    business_type = '$business_type',
                    plan = '$plan'
                WHERE id = $id";

        if ($mysqli->query($sql) === TRUE) {
            exit(json_encode(['status' => true, 'message' => "Record updated successfully"]));
        } else {
            exit(json_encode(['status' => false, 'message' => $mysqli->error]));
        }
    }

    exit(json_encode(['status' => false]));
}

function is_not_empty_fields($array){
    $return = true;

    foreach ($array as $value){
        if (empty($value)) $return = false;
    }

    return $return;
}