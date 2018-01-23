<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "localhost";
$username = "****";
$password = "****";
$dbname = "****";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM Fighters";
$result = $conn->query($sql);

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"firstname":"'  . $rs["firstname"]. '",';
    $outp .= '"lastname":"'   . $rs["lastname"]. '",';
    $outp .= '"class":"'. $rs["class"]. '",';
    $outp .= '"str":"'. $rs["strength"]. '",';
    $outp .= '"wisdom":"'. $rs["wisdom"]. '",';
    $outp .= '"location":"'. $rs["location"]. '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>

