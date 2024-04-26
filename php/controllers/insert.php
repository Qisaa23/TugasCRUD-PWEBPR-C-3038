<?php
require "../taskmodel.php";

$task = $_POST["task"];
$collaboration = $_POST["collaboration"];
$duedate = $_POST["duedate"];
$status = $_POST["status"];

// Panggil fungsi create dari taskmodel
if (task::create($task, $collaboration, $duedate, $status)) {
   //  echo 'Data berhasil disimpan';
   Header('Location: http://localhost/TUGASCRUD/php/dashboard.php');
} else {
    echo 'Gagal menyimpan data';
}