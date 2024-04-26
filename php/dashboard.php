<?php
include 'database.php'; // Menghubungkan ke file database.php

// Query untuk mengambil data dari database
$sql = "SELECT * FROM tbtask";
$result = mysqli_query($conn, $sql);

// Periksa apakah ada hasil
if (mysqli_num_rows($result) > 0) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker App by 3038</title>
    <link rel="stylesheet" href="/TUGASCRUD/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                            <a href="dashboard.php" class="dashboard">
                                <span class="material-symbols-outlined full">dashboard</span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="insertpage.php" class="insertpage">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                                <span class="title">Add Task</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <a href="login.php" class="logout">
                <span class="material-symbols-outlined">
                    logout
                </span>
                <h4>Logout</h4>
            </a>
        </div>
        <div class="right">
            <div class="top">
                <div class="searchBx">
                    <h2>Dashboard</h2>
                    <div class="inputBx">
                        <span class="material-symbols-outlined searchOpen">
                            search
                        </span>
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
                <span class="material-symbols-outlined">
                    notifications
                </span>
            </div>
            <div class="canscroll">
                <div class="task-table">
                <div class="title-table">
                    <h2>My Task</h2>
                    <a href="insertpage.php" class="addtask">Add New Task</a>
                </div>
                    <table class="table">
                        <tr>
                            <th>No.</th>
                            <th>Task To-Do</th>
                            <th>Collaboration</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $row_number = 1; // Inisialisasi nomor urut
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?= $row_number ?></td> <!-- Tampilkan nomor urut -->
                                <td><?= $row['task'] ?></td>
                                <td><?= $row['collaboration'] ?></td>
                                <td><?= $row['duedate'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td>
                                    <div class="grup-action-btn">
                                        <a href="/TUGASCRUD/php/updatepage.php?id=<?= $row['id']?>"><button class="edit-btn">Edit</button></a>
                                        <button class="delete-btn" onclick="konfirmasiHapus(<?= $row['id']?>)">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $row_number++;
                                }
                            } else {
                                echo "0 hasil";
                            }
                            mysqli_close($conn);
                            ?>
                      </table>
                </div>
            </div>
        </div>
    </div>
    <script>
    function konfirmasiHapus(id) {
        if (confirm('Apakah anda yakin akan menghapus data ini?')) {
            window.location.href = '/TUGASCRUD/php/controllers/delete.php?id=' + id;
        } else {}
    }
    </script>
</body>
</html>