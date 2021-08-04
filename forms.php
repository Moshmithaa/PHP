<?php 
   if(isset($_POST["submit"])) {
       $name = $_POST["name"];
       $color = $_POST["colors"];
       echo "Name = $name <br/> Color = $color";
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "POST">
        <label for="name">Name</label>
        <input type="text" name="name" required>
        <br /><br/>
        <label for="colors">Colors</label>
        <select name="colors" id="colors" required>
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="blue">blue</option>
            <option value="yellow">yellow</option>
            <option value="black">black</option>
            <option value="purple">purple</option>
        </select>
        <br/> <br/>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>