<?php 

if(isset($_POST["submit"])) {
    $orindate = $_POST["date"];
    $orinhightemp = $_POST["hightemp"];
    $orinlowtemp = $_POST["lowtemp"];
    $orindesc = $_POST["description"];

    class forecast {
        private $date;
        private $highTemperature;
        private $lowTemperature;
        private $description;
    
        function __construct($date,$highTemperature,$lowTemperature,$description) {
            $this->date = $date;
            $this->highTemperature = $highTemperature;
            $this->lowTemperature = $lowTemperature;
            $this->description = $description;
        }
    
        function get_date() {
            return $this->date;
        }
    
        function get_lowTemperature() {
            return $this->lowTemperature;
        }
    
        function get_highTemperature() {
            return $this->highTemperature;
        }
    
        function get_description() {
            return $this->description;
        }    
    
    }

    $result = new forecast($orindate,$orinhightemp,$orinlowtemp,$orindesc);
    echo "<table>";
    echo "<tr>";
    echo "<th>Date</th>";
    echo "<th>HighTemo</th>";
    echo "<th>LowTemp</th>";
    echo "<th>Description</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>". $result->get_date() . "<td/>";
    echo "<td>". $result->get_highTemperature() . "<td/>";
    echo "<td>". $result->get_lowTemperature() . "<td/>";
    echo "<td>". $result->get_description() . "<td/>";
    echo "<tr/>";
    echo "</table>";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forecasting</title>
    <style>
       table, th, td {
          border: 1px solid black;
         border-collapse: collapse;
}
    </style>

</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <label for="date">Date</label>
      <br/>
      <input type="date" name="date" required>
      <br/>
      <label for="hightemp">High Temperature</label>
      <br/>
      <input type="number" name="hightemp" required>
      <br/>
      <label for="lowtemp">Low Temperature</label>
      <br/>
      <input type="number" name="lowtemp" required>
      <br/>
      <label for="description">Description</label>
      <br/>
      <textarea name="description" cols="30" rows="10" required></textarea>
      <br/>
      <input type="submit" name="submit">
    </form>
</body>
</html>