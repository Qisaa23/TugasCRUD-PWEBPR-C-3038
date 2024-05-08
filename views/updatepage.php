<?php
// require "model/taskmodel.php";
// require "config/env.php";
// require "config/database.php";

// // Ambil ID dari parameter URL
// $id = $_GET["id"];
// var_dump($id);
// // Ambil data task berdasarkan ID
// $taskData = TaskModel::getTaskById($id);

// // Pastikan data task ditemukan sebelum melanjutkan
// if ($taskData) {
//     $task = $taskData['task'];
//     $collaboration = $taskData['collaboration'];
//     $duedate = $taskData['duedate'];
//     $status = $taskData['status'];
// } else {
//     exit("Data not found");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page by 3038</title>
    <link rel="stylesheet" href="/TugasCRUD-PWEBPR-C-3038/views/upage.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
        <h1>Update Your Task</h1>
        <form id="form" action="/TugasCRUD-PWEBPR-C-3038/update/<?= $id?>" method="post" class="form" enctype="multipart/form-data">
            <div class="form-control">
                <label for="task">Task</label>
                <input type="text" id="task" name="task" placeholder="Input here" value="<?= $task; ?>" />
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
            <div class="form-control">
                <label for="image">Task Image</label>
                <input type="file" id="taskimage" name="taskimage" accept="image/*" />
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
