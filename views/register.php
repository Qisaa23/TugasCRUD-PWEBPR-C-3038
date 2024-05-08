<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page App by 3038</title>
    <link rel="stylesheet" href="views/rform.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
        <form id="form" action="login" method="POST" class="form">
            <h1>Register Your Account!</h1>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="name" placeholder="Input here" />
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Input here" />
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Input here" />
            </div>
            <button type="register">Register</button>
        </form>
    </div>
</body>
</html>