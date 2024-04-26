<?php
require "../taskmodel.php";

$id = $_POST["id"];
$task = $_POST["task"];
$collaboration = $_POST["collaboration"];
$duedate = $_POST["duedate"];
$status = $_POST["status"];

$data = task::update($id,$task,$collaboration,$duedate,$status);

if ($data) {
    header("Location: http://localhost/TUGASCRUD/php/dashboard.php");
} else {
    echo "Gagal mengupdate data($id)";
}