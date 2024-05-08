<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="views/ipage.css">
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
                                <span class="material-symbols-outlined">
                                    dashboard
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="insertpage" class="insertpage">
                                <span class="material-symbols-outlined full">
                                    Add
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
            <div class="bottom">
                <form id="form" action="create" method="post" class="form" enctype="multipart/form-data">
                    <h2>Insert Your Task Below!</h2>
                    <div class="form-control">
                        <label for="task">Task</label>
                        <input type="text" id="task" name="task" placeholder="Input here" />
                    </div>
                    <div class="form-control">
                        <label for="collaboration">Collaboration</label>
                        <input type="text" id="collaboration" name="collaboration" placeholder="Input here" />
                    </div>
                    <div class="form-control">
                        <label for="duedate">Due Date</label>
                        <input type="text" id="duedate" name="duedate" placeholder="Input here" />
                    </div>
                    <div class="form-control">
                        <label for="status">Status</label>
                        <input type="text" id="status" name="status" placeholder="Input here" />
                    </div>
                    <div class="form-control">
                        <label for="image">Task Image</label>
                        <input type="file" id="taskimage" name="taskimage" accept="image/*" />
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>