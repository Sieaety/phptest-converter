<!DOCTYPE html>
<html>

<head>

	<!-- meta tags and title -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page Title</title>

	<!-- external and internal CSS -->
	<link rel="stylesheet" href="styles.css" media="all">
	<style>
		/* in-file CSS here */
	</style>

	<!-- external and internal JavaScript -->
	<script type="text/javascript" src="scripts.js" defer></script>
	<script>
		// in-page JavaScript here
	</script>

</head>

<body>

	<!-- HTML elements here -->
  <?
$number = $_GET["number"];
$preConvert = $_GET["preConvert"];
$postConvert = $_GET["postConvert"];

switch ($preConvert) {
  case "millimeters":
switch ($postConvert) {
  case "centimeters":
    $result = $number / 10;
    echo $number . " millimeters = " . $result . " centimeters";
    break;
  case "meters":
    $result = $number / 1000;
    echo $number . " millimeters = " . $result . " meters";
      case "kilometers":
    $result = $number / 1e+6;
echo $number . " millimeters = " . $result . " kilometers";
    break;
      case "inches":
    $result = $number / 25.4;
echo $number . " millimeters = " . $result . " inches";
    break;
      case "feet":
    $result = $number / 305;
echo $number . " millimeters ≈ " . $result . " feet";
    break;
case "yards":
    $result = $number / 914;
echo $number . " millimeters ≈ " . $result . " yards";
    break;
case "miles":
    $result = $number / 1.609e+6;
    echo $number . " millimeters ≈ " . $result . " miles";
    break;
     case "millimeters":
    $result = $number;
    echo $number . " millimeters = " . $result . " millimeters";
      } 

    break;
  case "centimeters":
switch ($postConvert) {
  case "millimeters":
$result = $number * 10;
    echo $number . " centimeters = " . $result . " millimeters";
    break;

  case "meters":
  $result = $number / 100;
    echo $number . " centimeters = " . $result . " meters";
    break;
      case "kilometers":
$result = $number / 100000;
    echo $number . " centimeters = " . $result . " kilometers";
    break;
      case "inches":
$result = $number / 2.54;
    echo $number . " centimeters = " . $result . " inches";
    break;
      case "feet":
$result = $number / 30.48;
    echo $number . " centimeters = " . $result . " feet";
    break;
case "yards":
$result = $number / 91.44;
    echo $number . " centimeters = " . $result . " yards";
    break;
case "miles":
    $result = $number / 160934;
    echo $number . " centimeters ≈ " . $result . " miles";
    break;
case "centimeters":
    $result = $number;
    echo $number . " centimeters = " . $result . " centimeters";
      } 
    
    break;
  case "meters":
switch ($postConvert) {
  case "millimeters":
$result = $number * 1000;
    echo $number . " meters = " . $result . " millimeters";
    break;
  case "centimeters":
$result = $number * 100;
    echo $number . " meters = " . $result . " centimeters";
    break;
      case "kilometers":
$result = $number / 1000;
    echo $number . " meters = " . $result . " kilometers";
    break;
      case "inches":
$result = $number * 39.37;
    echo $number . " meters = " . $result . " inches";
    break;
      case "feet":
$result = $number * 3.281;
    echo $number . " meters ≈ " . $result . " feet";
    break;
case "yards":
$result = $number * 1.094;
    echo $number . " meters ≈ " . $result . " yards";
    break;
case "miles":
   $result = $number / 1609; 
    echo $number . " meters ≈ " . $result . " miles";
    break;
case "meters":
    $result = $number;
    echo $number . " meters = " . $result . " meters";

      } 
  
    break;
      case "kilometers":
switch ($postConvert) {
  case "millimeters":
$result = $number * 1e+6;
    echo $number . " kilometers = " . $result . " millimeters";
    break;
  case "centimeters":
$result = $number * 100000;
    echo $number . " kilometers = " . $result . " centimeters";
    break;
  case "meters":
  $result = $number * 1000;
    echo $number . " kilometers = " . $result . " meters";
    break;

      case "inches":
$result = $number * 39370;
    echo $number . "kilometers ≈ " . $result . " inches";
    break;
      case "feet":
$result = $number * 3281;
    echo $number . " kilometers ≈ " . $result . " feet";
    break;
case "yards":
$result = $number * 1094;
    echo $number . " kilometers ≈ " . $result . " yards";
    break;
case "miles":
   $result = $number / 1.609; 
    echo $number . " kilometers ≈ " . $result . " miles";
    break;
case "kilometers":
    $result = $number;
    echo $number . " kilometers = " . $result . " kilometers";
      } 

    break;
      case "inches":
switch ($postConvert) {
  case "millimeters":
$result = $number * 25.4;
        echo $number . " inches = " . $result . " millimeters";

    break;
  case "centimeters":
$result = $number * 2.54;
        echo $number . " inches = " . $result . " centimeters";

    break;
  case "meters":
  $result = $number / 39.37;
        echo $number . " inches = " . $result . " meters";

    break;
      case "kilometers":
$result = $number / 39370;
        echo $number . " inches ≈ " . $result . " kilometers";

    break;

      case "feet":
$result = $number / 12;
       echo $number . " inches = " . $result . " feet";
 
    break;
case "yards":
$result = $number / 36;
       echo $number . " inches = " . $result . " yards";
 
    break;
case "miles":
   $result = $number / 63360; 
       echo $number . " inches = " . $result . " miles";
    break;
case "inches":
    $result = $number;
    echo $number . " inches = " . $result . " inches";
 
      } 

    break;
      case "feet":
switch ($postConvert) {
  case "millimeters":
$result = $number * 304.8;
            echo $number . " feet ≈ " . $result . " millimeters";

    break;
  case "centimeters":
$result = $number * 30.48;
            echo $number . " feet = " . $result . " centimeters";

    break;
  case "meters":
  $result = $number / 3.281;
            echo $number . " feet ≈  " . $result . " meters";

    break;
      case "kilometers":
$result = $number / 3281;
            echo $number . " feet ≈ " . $result . " kilometers";

    break;
      case "inches":
$result = $number * 12;
            echo $number . " feet = " . $result . " inches";

    break;
case "yards":
$result = $number / 3;
            echo $number . " feet = " . $result . " yards";

    break;
case "miles":
  $result = $number / 5280; 
            echo $number . " feet = " . $result . " miles";
    break;
case "feet":
    $result = $number;
    echo $number . " feet = " . $result . " feet";

      } 

break;
    
case "yards":
switch ($postConvert) {
  case "millimeters":
$result = $number * 914.4;
    echo $number . " yards ≈ " . $result . " millimeters";

    break;
  case "centimeters":
$result = $number * 91.44;
                echo $number . " yards = " . $result . " centimeters";

    break;
  case "meters":
  $result = $number / 1.094;
                echo $number . " yards ≈ " . $result . " meters";

    break;
      case "kilometers":
$result = $number / 1094;
                echo $number . " yards ≈ " . $result . " kilometers";

    break;
      case "inches":
$result = $number * 36;
                echo $number . " yards ≈ " . $result . " inches";

    break;
      case "feet":
$result = $number * 3;
                echo $number . " yards ≈ " . $result . " feet";

    break;

case "miles":
 $result = $number / 1760;   
                echo $number . " yards ≈ " . $result . " miles";
    break;
case "yards":
    $result = $number;
    echo $number . " yards = " . $result . " yards";

      } 

    break;
case "miles":
switch ($postConvert) {
  case "millimeters":
$result = $number * 1.609e+6;
        echo $number . " miles ≈ " . $result . " millimeters";

    break;
  case "centimeters":
$result = $number * 160934;
        echo $number . " miles ≈ " . $result . " centimeters";

    break;
  case "meters":
  $result = $number * 1609;
        echo $number . " miles ≈ " . $result . " meters";

    break;
      case "kilometers":
$result = $number * 1.609;
        echo $number . " miles ≈ " . $result . " kilometers";

    break;
      case "inches":
   $result = $number * 63360 ; 
        echo $number . " miles = " . $result . " inches";


    break;
      case "feet":
   $result = $number * 5280;  
        echo $number . " miles = " . $result . " feet";


    break;
case "yards":
   $result = $number * 1760;  
        echo $number . " miles = " . $result . " yards";
        break;
case "miles":
    $result = $number;
    echo $number . " miles = " . $result . " miles";
      } 
    
      } 
  ?>

    <form action="convert.php" method="get">
<input type="number" step = "0.01" name="number" required>
  <select id="preConvert" name="preConvert">
    <option value="millimeters">Millimeters</option>
    <option value="centimeters">Centimeters</option>
    <option value="meters">Meters</option>
    <option value="kilometers">Kilometers</option>
    <option value="inches">Inches</option>
    <option value="feet">Feet</option>
    <option value="yards">Yards</option>
    <option value="miles">Miles</option>
  </select>
  <label for="postConvert">Convert to:</label>
  <select id="postConvert" name="postConvert">
    <option value="centimeters">Centimeters</option>
    <option value="meters">Meters</option>
    <option value="kilometers">Kilometers</option>
    <option value="inches">Inches</option>
    <option value="feet">Feet</option>
    <option value="yards">Yards</option>
    <option value="miles">Miles</option>
    <option value="millimeters">Millimeters</option>
  </select>
<input type="submit" value="Convert">
</form>
</body>

</html>



