<?php
require "../taskmodel.php";

// Pastikan id yang diterima dari parameter GET terdefinisi
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $deleted = task::delete($id); 

    if ($deleted) {
        header("Location: http://localhost/TUGASCRUD/php/dashboard.php");
    } else {
        echo "Gagal menghapus data ($id)";
    }
} else {
    echo "ID tidak ditemukan";
}