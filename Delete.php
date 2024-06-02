<?php 

include "conn.php"; 

if(isset($_GET['AccID']))  
{
   $AccID = $_GET['AccID'];
   $sql = "DELETE FROM Accounts WHERE AccID=$AccID";

   $result = mysqli_query($conn, $sql);
    if ($result == TRUE) 
    {
        echo "<script>alert('Record Delete successfully.');</script>";
        header("refresh:0.2;url=AdminHome.php");
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} 
?>