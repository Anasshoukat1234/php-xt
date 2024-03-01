<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get"><br>
      Name:<input type="text" name="username"><br>
      age: <input type="number" name="age"><br>
       Email: <input type="email" name="email"><br>
        <input type="submit">
    </form>
    <?php  echo $_GET["username"] ?> <br>
    <?php echo $_GET["age"]?><br>
    <?php echo $_GET["email"]?>

</body>
</html>