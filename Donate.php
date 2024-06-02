<?php

include 'conn.php';
$FName = $Add = $Email = $CNum = $PayM = $Amo ="";

$FName = $_POST["FName"];
$Add = $_POST["Add"];
$Email = $_POST["Email"];
$CNum = $_POST["CNum"];
$PayM = $_POST["PayM"];
$Amo = $_POST["Amo"];

$sql="INSERT INTO Donation(FName,`Add`,Email,CNum,PayM,Amo) VALUES('$FName','$Add','$Email','$CNum','$PayM','$Amo')";

if (mysqli_query($conn, $sql)) 
{
    header("Location: LoginHome.html");
    exit();
}
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>