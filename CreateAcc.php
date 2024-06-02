<?php

include 'conn.php';
$FName = $LName = $Add = $DOB = $gender = $Email = $CNum = $UName = $Passw ="";

$FName = $_POST["FName"];
$LName = $_POST["LName"];
$Add = $_POST["Add"];
$DOB = $_POST["DOB"];
$gender = $_POST["gender"];
$Email = $_POST["Email"];
$CNum = $_POST["CNum"];
$UName = $_POST["UName"]; 
$Passw = $_POST["Passw"]; 


$sql="INSERT INTO Accounts(FName,LName,`Add`,DOB,gender,Email,CNum,UName,Passw) VALUES('$FName','$LName','$Add','$DOB','$gender','$Email','$CNum','$UName','$Passw')";

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