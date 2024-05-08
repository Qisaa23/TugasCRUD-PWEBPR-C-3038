<?php
// require "model/taskmodel.php";
// require "config/database.php"; 

// // Periksa apakah parameter id telah diterima dari URL
// if(isset($_GET['id'])) {
//     $id = $_GET['id'];

//     // Panggil fungsi dari model untuk mendapatkan data detail berdasarkan ID
//     $taskData = TaskModel::getTaskById($id);

//     if ($taskData !== false) {
//         // Tampilkan data detail, termasuk gambar jika ada
//         echo 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Detail</title>
    <link rel="stylesheet" href="/TugasCRUD-PWEBPR-C-3038/views/detail.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
        <div class="left">
            <header>
                <div class="logo">
                    <h2>Task Tracker App</h2>
                </div>
                <div class="user">
                    <h2>Lu'lu'un Fifalaqisa<br><span>ID 000001</span></h2>
                    <div class="arrow">
                        <span class="material-symbols-outlined">
                            expand_more
                        </span>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="../dashboard" class="dashboard">
                                <span class="material-symbols-outlined full">dashboard</span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="../insertpage" class="insertpage">
                                <span class="material-symbols-outlined">add</span>
                                <span class="title">Add Task</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <a href="login" class="logout">
                <span class="material-symbols-outlined">logout</span>
                <h4>Logout</h4>
            </a>
        </div>
        <div class="right">
            <h2>Detail Task</h2>
            <p>Task: <?= $task; ?></p>
            <p>Collaboration: <?= $collaboration; ?></p>
            <p>Due Date: <?= $duedate; ?></p>
            <p>Status: <?= $status; ?></p>
            <p>Task Image: </p>
            <?php
                // Tampilkan gambar jika ada
                if (!empty($task['image'])) {
                    echo "<img src='/TugasCRUD-PWEBPR-C-3038/img/" . $taskimage . "' alt='Task Image'>";
                }
            ?>
        </div>
    </div>
</body>
</html>
