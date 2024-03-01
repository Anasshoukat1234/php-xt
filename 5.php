<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="get"> <br>
    color: <input type="text" name="color"><br>
    plural noun: <input type="text" name="pluralnoun"><br>
    celebrity: <input type="text" name="celebrity"><br>

    <input type="submit"> <br>

    </form>
    

    <?php 
    $color=$_GET["color"];
    $pluralnoun=$_GET["pluralnoun"];
    $celebrity=$_GET["celebrity"];


    echo "$color are red <br>";
    echo "$pluralnoun  are blue <br>";
    echo "i love $celebrity <br>";
    
    ?>
</body>
</html>