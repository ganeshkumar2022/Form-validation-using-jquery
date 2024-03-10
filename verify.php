<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    h1
    {
        color:red;
    }
    p
    {
        font-size:18px;
    }
</style>
</head>
<body>
    <h1>User details</h1>
    <p><b>Name : </b><?=$_POST["name"]?></p>
    <p><b>Email : </b><?=$_POST["email"]?></p>
    <p><b>Password : </b><?=$_POST["password"]?></p>
    <p><b>Address : </b><?=$_POST["address"]?></p>
    <p><b>Contact : </b><?=$_POST["contact"]?></p>
    <p><b>Myimage : </b><?=$_FILES["myimage"]["name"]?></p>
</body>
</html>