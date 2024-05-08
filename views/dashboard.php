<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker App by 3038</title>
    <link rel="stylesheet" href="views/dashstyle.css">
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
                            <a href="dashboard" class="dashboard">
                                <span class="material-symbols-outlined full">dashboard</span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="insertpage" class="insertpage">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                                <span class="title">Add Task</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <a href="login" class="logout">
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
                    <a href="insertpage" class="addtask">Add New Task</a>
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
                            for ($i=0; $i < count($data); $i++) { 
                        ?>
                            <tr>
                                <td><?= $row_number ?></td> <!-- Tampilkan nomor urut -->
                                <td><?= $data[$i]['task'] ?></td>
                                <td><?= $data[$i]['collaboration'] ?></td>
                                <td><?= $data[$i]['duedate'] ?></td>
                                <td><?= $data[$i]['status'] ?></td>
                                <td>
                                    <div class="grup-action-btn">
                                        <a href="detailpage/<?= $data[$i]['id']?>">
                                            <button class="detail-btn">Check</button>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="grup-action-btn">
                                        <a href="updatepage/<?= $data[$i]['id']?>">
                                            <button class="edit-btn">Edit</button>
                                        </a>
                                        <a href="delete/<?= $data[$i]['id']?>"onclick="return confirm('Are you sure you want to delete this item?');">
                                            <button class="delete-btn">Hapus</button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $row_number++;
                                }
                            // } else {
                            //     echo "0 hasil";
                            // }
                            // mysqli_close($conn);
                            ?>
                      </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>