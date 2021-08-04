<?php 

if(isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];
    $cars = $_POST["cars"];
    $choice = $_POST["vehicle"];
    header("Location: redirectform1.php");
    
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
       <label for="name">Name</label>
       <br/>
       <input type="text" name="name">
       <br/>
       <label for="comment">Comment</label>
       <br />
       <textarea name="comment" id="textarea" cols="30" rows="10"></textarea>
       <br/>
       <label for="gender">Gender</label>
       <br/>
       <input type="radio" name="gender" value="male">Male
       <input type="radio" name="gender" value="female">Female
       <input type="radio" name="gender" value="other">Other
       <br/>
       <label for="cars">Cars : </label>
       <select name="cars" id="cars">
           <option value="porche">Porche</option>
           <option value="thar">Thar</option>
           <option value="bmw">BMW</option>
       </select>
       <br/>
       <label for="vehicle">Vehicle</label>
       <br/>
       <input type="checkbox" id="vehicle1" name="vehicle" value="Bike">
       <label for="vehicle1"> I have a bike</label><br>
       <input type="checkbox" id="vehicle2" name="vehicle" value="Car">
       <label for="vehicle2"> I have a car</label><br>
       <input type="checkbox" id="vehicle3" name="vehicle" value="Boat">
       <label for="vehicle3"> I have a boat</label><br><br>
       <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>