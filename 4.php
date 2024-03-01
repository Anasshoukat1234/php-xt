<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=inpu, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="number" name="Num1"><br>
    <input type="number" name="Num2"><br>
    <input type="submit">
</form>

  Answer: <?php  echo $_GET["Num1"] + $_GET["Num2"]?>
  
</body>
</html>