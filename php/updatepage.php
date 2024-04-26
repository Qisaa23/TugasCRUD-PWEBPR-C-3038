<?php
require "taskmodel.php";

// Ambil ID dari parameter URL
$id = $_GET["id"];

// Ambil data task berdasarkan ID
$taskData = task::getTaskById($id);

// Pastikan data task ditemukan sebelum melanjutkan
if ($taskData) {
    $task = $taskData['task'];
    $collaboration = $taskData['collaboration'];
    $duedate = $taskData['duedate'];
    $status = $taskData['status'];
} else {
    // Jika data tidak ditemukan, redirect atau tampilkan pesan kesalahan
    // Contoh: header("Location: error.php");
    exit("Data not found");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page by 3038</title>
    <link rel="stylesheet" href="/TUGASCRUD/css/uppage.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
        <h1>Update Your Task</h1>
        <form id="form" action="http://localhost/TUGASCRUD/php/controllers/update.php" method="post" class="form">
            <!-- Tambahkan nilai-nilai default dari database ke dalam input -->
            <div class="form-control">
                <label for="task">Task</label>
                <input type="text" id="task" name="task" placeholder="Input here" value="<?php echo $task; ?>" />
            </div>
            <div class="form-control">
                <label for="collaboration">Collaboration</label>
                <input type="text" id="collaboration" name="collaboration" placeholder="Input here" value="<?php echo $collaboration; ?>" />
            </div>
            <div class="form-control">
                <label for="duedate">Due Date</label>
                <input type="text" id="duedate" name="duedate" placeholder="Input here" value="<?php echo $duedate; ?>" />
            </div>
            <div class="form-control">
                <label for="status">Status</label>
                <input type="text" id="status" name="status" placeholder="Input here" value="<?php echo $status; ?>" />
            </div>
            <!-- Sertakan ID sebagai input tersembunyi untuk dikirim ke controller -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="update">Update</button>
        </form>
    </div>
</body>
</html>
