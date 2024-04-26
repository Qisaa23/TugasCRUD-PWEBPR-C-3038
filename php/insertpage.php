<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="/TUGASCRUD/css/ipage.css">
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
                                <span class="material-symbols-outlined">
                                    dashboard
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="insertpage.php" class="insertpage">
                                <span class="material-symbols-outlined full">
                                    Add
                                </span>
                                <span class="title">Add Task</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="logout">
                <span class="material-symbols-outlined">
                    logout
                </span>
                <h4>Logout</h4>
            </div>
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
            <div class="bottom">
                <form id="form" action="http://localhost/TUGASCRUD/php/controllers/insert.php" method="post" class="form">
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
                    <button type="insert">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <script>
    document.getElementById('form').addEventListener('submit', function(event) {
        var task = document.getElementById('task').value.trim();
        var collaboration = document.getElementById('collaboration').value.trim();
        var dueDate = document.getElementById('duedate').value.trim();
        var status = document.getElementById('status').value.trim();

        if (task === '' || collaboration === '' || dueDate === '' || status === '') {
            event.preventDefault(); // Prevent form submission
            alert('Please fill in all fields.'); // Show alert message
        }
    });
    </script>
</body>
</html>