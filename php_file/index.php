<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../">back</a>
    <h1>Login</h1>
    <form action="backend/login.php" method="POST">
        <label for="username">Username : </label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password : </label>
        <input type="text" id="password" name="password">
        <br>
        <Button type="submit">Login</Button>
    </form>
</body>
</html>