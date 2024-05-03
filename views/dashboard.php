<?php
// D:\XAMPP\htdocs\TugasCRUD-PWEBPR-C-3038\config\database.php
include '../config/database.php';
$sql = "SELECT * FROM tbtask";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker App by 3038</title>
    <link rel="stylesheet" href="dashstyle.css">
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
                            <a href="/task/dashboard" class="dashboard">
                                <span class="material-symbols-outlined full">dashboard</span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="/task/insertpage" class="insertpage">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                                <span class="title">Add Task</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <a href="/task/login" class="logout">
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
                            <th>Detailed</th>
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
                                        <a href="/task/detailpage/<?= $row['id'] ?>"><button class="detail-btn">Check</button></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="grup-action-btn">
                                        <a href="/task/updatepage/<?= $row['id'] ?>">
                                            <button class="edit-btn">Edit</button>
                                        </a>
                                        <a href="/task/delete/<?= $row['id']?>"onclick="return confirm('Are you sure you want to delete this item?');">
                                            <button class="delete-btn">Hapus</button>
                                        </a>
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
</body>
</html>