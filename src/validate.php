<?php
$data = [];

$data['name'] = validate($_POST['name']);
$data['email'] = validate($_POST['email']);
$data['contact'] = validate($_POST['contact']);
$data['oid'] = validate($_POST['oid']);
$data['address'] = validate($_POST['address']);
$data['date'] = $_POST['date'];

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (
    filter_var($data['email'], FILTER_VALIDATE_EMAIL) &&
    preg_match("/^([a-zA-Z' ]+)$/", $data['name']) &&
    preg_match("/^[0-9]{10}$/", $data['contact']) &&
    $data['oid'] != '' && $data['address'] != '' &&
    $data['date'] != ''
) {
    echo "<h3>Success.... </h3>";
} else {
    echo "<h3>Error... ! please fill data Correctly</h3>";
}
