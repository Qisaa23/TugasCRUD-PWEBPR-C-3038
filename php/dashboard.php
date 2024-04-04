<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker App by 3038</title>
    <link rel="stylesheet" href="../css/style.css">
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
                            <a href="#">
                                <span class="material-symbols-outlined full">dashboard</span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">
                                    check_box
                                </span>
                                <span class="title">Project</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">
                                    task
                                </span>
                                <span class="title">My Task</span>
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
            <div class="canscroll">
                <div class="friend-table">
                    <div class="title-table">
                        <h2>Friend List</h2>
                        <button class="addfriend">Add New Freind</button>
                    </div>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Alias</th>
                            <th>Phone Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>000002</td>
                            <td>@yawi</td>
                            <td>Aura Yawi</td>
                            <td>+6283577384951</td>
                            <td>Online</td>
                            <td>
                                <div class="grup-action-btn">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>000003</td>
                            <td>@irrad</td>
                            <td>RRQ Irrad</td>
                            <td>+6283577384951</td>
                            <td>Offline</td>
                            <td>
                                <div class="grup-action-btn">
                                    <button class="edit-btn">Edit</button>
                                    <button class="delete-btn">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>000004</td>
                            <td>@brusko</td>
                            <td>RRQ Brusko</td>
                            <td>+6283577384951</td>
                            <td>Online</td>
                            <td>
                              <div class="grup-action-btn">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                            </td>
                        </tr>
                      </table>
                </div>
                <main>
                    <div class="projectCard">
                        <div class="projectTop">
                            <h2>Project ADPL PPL<br><span>Kelompok E2</span></h2>
                            <div class="projectDots">
                                <span class="material-symbols-outlined">
                                    more_horiz
                                </span>
                            </div>
                        </div>
                        <div class="projectProgress">
                            <div class="process">
                                <h2>In Progress</h2>
                            </div>
                            <div class="priority">
                                <h2>High Priority</h2>
                            </div>
                        </div>
                        <div class="task">
                            <h2>Task Done: <bold>25</bold> / 50</h2>
                            <span class="line"></span>
                        </div>
                        <div class="due">
                            <h2>Due Date: 18 April 2024</h2>
                        </div>
                    </div>
                    <div class="projectCard projectCard2">
                        <div class="projectTop">
                            <h2>Project PWEB<br><span>Kelompok 4</span></h2>
                            <div class="projectDots">
                                <span class="material-symbols-outlined">
                                    more_horiz
                                </span>
                            </div>
                        </div>
                        <div class="projectProgress">
                            <div class="process">
                                <h2>In Progress</h2>
                            </div>
                            <div class="priority">
                                <h2>Medium Priority</h2>
                            </div>
                        </div>
                        <div class="task">
                            <h2>Task Done: <bold>05</bold> / 30</h2>
                            <span class="line"></span>
                        </div>
                        <div class="due">
                            <h2>Due Date: 15 May 2024</h2>
                        </div>
                    </div>
                    <div class="myTasks">
                        <div class="tasksHead">
                            <h2>My Tasks</h2>
                            <div class="tasksdelete">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </div>
                        </div>
                        <div class="tasks">
                            <ul>
                                <li>
                                    <span class="taskIconAdd">
                                        <span class="AddSymbol">
                                            <span class="material-symbols-outlined">
                                                Add
                                            </span>
                                        </span>
                                        <span class="tasksNameAdd">
                                                Add New Task
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="tasksIconName">
                                        <span class="tasksIcon done">
                                            <span class="material-symbols-outlined">
                                                check
                                            </span>
                                        </span>
                                        <span class="tasksName">
                                            My Task 1
                                        </span>
                                    </span>
                                    <span class="tasksEdit">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="tasksIconName">
                                        <span class="tasksIcon notDone"></span>
                                        <span class="tasksName">
                                            My Task 2
                                        </span>
                                    </span>
                                    <span class="tasksEdit">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="tasksIconName">
                                        <span class="tasksIcon notDone"></span>
                                        <span class="tasksName">
                                            My Task 3
                                        </span>
                                    </span>
                                    <span class="tasksEdit">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="tasksIconName">
                                        <span class="tasksIcon done">
                                            <span class="material-symbols-outlined">
                                                check
                                            </span>
                                        </span>
                                        <span class="tasksName tasksLine">
                                            <underline>My Task 4</underline>
                                        </span>
                                    </span>
                                    <span class="tasksEdit">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="tasksIconName">
                                        <span class="tasksIcon done">
                                            <span class="material-symbols-outlined">
                                                check
                                            </span>
                                        </span>
                                        <span class="tasksName tasksLine">
                                            My Task 5
                                        </span>
                                    </span>
                                    <span class="tasksEdit">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timelineHead">
                            <h2>My Timeline</h2>
                            <div class="timelinedelete">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </div>
                        </div>
                        <div class="timeline-btn">
                            <button class="Add">Add New Timeline</button>
                            <button class="Edit">Edit Timeline</button>
                        </div>
                        <div class="timelineVideos">
                            <ul>
                                <li>
                                    <span class="videoText">
                                        <span class="material-symbols-outlined full">
                                            slideshow
                                        </span>
                                        <span class="text">
                                            Membuat Activity Diagram
                                        </span>
                                    </span>
                                    <span class="timelineTime">
                                        15:30
                                    </span>
                                </li>
                                <li>
                                    <span class="videoText">
                                        <span class="material-symbols-outlined">
                                            slideshow
                                        </span>
                                        <span class="text">
                                            Membuat Mock Up Web
                                        </span>
                                    </span>
                                    <span class="timelineTime">
                                        30:00
                                    </span>
                                </li>
                                <li>
                                    <span class="videoText">
                                        <span class="material-symbols-outlined">
                                            slideshow
                                        </span>
                                        <span class="text">
                                            Membuat Class Diagram
                                        </span>
                                    </span>
                                    <span class="timelineTime">
                                        30:00
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>