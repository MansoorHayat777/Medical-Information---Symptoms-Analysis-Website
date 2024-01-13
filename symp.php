<?php

$id = $_GET["q"];
$conn = mysqli_connect('localhost','root','','medicinfo') or die(mysqli_connect_error());
$sql = "select * from symptom where id=$id";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
echo "<h3 style='color: darkgreen; font-family: Tahoma;'>Some Of The Suggestions are: </h3>";
echo $row['symp'];
mysqli_close($conn);

?>