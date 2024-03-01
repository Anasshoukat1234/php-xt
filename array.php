<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post    ">
<input type="text" name="students"><br>
    <input type="submit">
    </form>

    <?php 
    $students = array ("ali"=>"A+", "Anas"=>"B-", "sami"=>"C-");
    // $students["sami"] = "F-";
    // echo $students["sami"];
    echo $students[$_POST["students"]];

    
    
    
    ?>
</body>
</html>
