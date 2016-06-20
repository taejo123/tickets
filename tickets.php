<?php
require_once("classes/LoginClass.php");
require_once("classes/SessionClass.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "melkweg";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `optreden`
					  SET `aantaltickets` = aantaltickets - '$aantaltickets'
					  WHERE `id` = 1";
$result = $conn->query($sql);

$aantaltickets = mysqli_real_escape_string($conn, $_POST['tickets1']);

$database->fire_query($sql);


var_dump($_POST);


$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>
<body>

<div class='container-fluid'>

    <div class='form-group'>
        <h2>NAAM VAN ARTIEST</h2>
        <br>
        <p2>Vul in aantal tickets:</p2>
        <form style="color: black;" method="post">
            <input id='xd' max='4' min='1' name='tickets1' type='number' value=1 onchange='myFunction()'>
        </form>

        <br><br>

        <p2 id='memes'>Prijs: 10 euro</p2>

        <script>
            var x, text;
            function myFunction() {
                var x, text;

                x = document.getElementById('xd').value;

                if (x == 1) {
                    text = 'Prijs: 10 euro';
                }
                else if (x == 2) {
                    text = 'Prijs: 20 euro';
                }
                else if (x == 3) {
                    text = 'Prijs: 30 euro';
                }
                else if (x == 4) {
                    text = 'Prijs: 40 euro';
                } else {
                    console.log(x);
                    alert('Selecteer tussen de 1 en de 4 tickets . ');
                    text = 'Selecteer tussen de 1 en de 4 tickets . ';
                }
                document.getElementById('memes').innerHTML = text;
            }
        </script>

        <script>
            function myFunction1() {
                if (x == 1 | x == 2 | x == 3 | x == 4) {
                    alert('U hebt uw tickets besteld . ');
                }
                else {
                    //alert('Selecteer tussen de 1 en de 4 tickets . ');
                }


            }
        </script>

        <br><br>

        <button type='button' name='submit' class='btn btn-default' onclick='myFunction1()'>Bestellen</button>
    </div>
</div>

</body>
</html>


