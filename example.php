<?php 

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $position = $_POST["select"];
    $gender = $_POST["gender"];

    echo "$username <br/> $password <br/> $position <br/> $gender";
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            max-width: 420px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST">
    <label>Username</label>
    <input type="text" name="username">
    <br/>
    <label>Password</label>
    <input type="text" name="password">
    <br/>
    <label>Position</label>
  <select name="select">
    <option value="one">one</option>
    <option value="two">two</option>
    <option value="three">three</option>
  </select>
  <br/>
  <label>Gender</label>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br/>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>