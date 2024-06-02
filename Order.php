<?php

include 'conn.php';
$FName = $Add = $Email = $CNum = $PayM = $qty = $cardNum = $cvvNum ="";

$FName = $_POST["FName"];
$Add = $_POST["Add"];
$Email = $_POST["Email"];
$CNum = $_POST["CNum"];
$PayM = $_POST["PayM"];
$qty = $_POST["qty"];
$cardNum = $_POST["cardNum"];
$cvvNum = $_POST["cvvNum"];

$sql="INSERT INTO Orders(FName,`Add`,Email,CNum,PayM,qty,cardNum,cvvNum) VALUES('$FName','$Add','$Email','$CNum','$PayM','$qty','$cardNum','$cvvNum')";

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