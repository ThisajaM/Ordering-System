<?php

include "conn.php";

$sql = "SELECT * FROM Donation";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Donations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<style>
body 
{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    font-weight:lighter;
}
.container2 
{
    padding: 23px;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    max-width: 1300px;
    width: 100%;
    margin: 20px auto;
    box-sizing: border-box;
    margin-left: -13px;
    background-color: transparent;
    background-size: cover;
    background-color: #f4f5f6;
}
th
{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    font-weight:normal;
}
.containar
{
    width: 100%;
    min-height: 100vh;
    padding-left: 5.9%;
    padding-right: 4%;
    box-sizing: border-box;
}
.navbar
{
    width: 100%;
    display: flex;
    align-items: center;
    margin-bottom: 13px;
}
.logo
{
    width: 200px;
    cursor: pointer;
    margin: 25px 0;
}
nav
{
    flex: 1;
    text-align: right ;
}
nav ul li
{
    list-style: none;
    display: inline-block;
    margin-right: 30px ;
    margin-left: 25px;
    margin-top: 33px;
}
ul
{
    justify-content:right;
    margin-left: 20px;
}
nav ul li a
{
    color: #000;
    font-size: 18px;
    text-decoration: none;
}
nav ul li a:hover
{
    text-decoration: none;
    color: #fb5283;
    text-decoration: none;
}
.button1
{
    color: #fff;
    padding: 10px;
    width: 100px;
    border-color: transparent;
    border-radius: 20px;
    font-size: 13px;
    cursor: pointer;
    background: linear-gradient(to right,#d32f7e,#fb5283);
}
.button1:hover
{
    color:#fb5283;
    padding: 10px;
    width: 100px;
    border-color:#fb5283;
    border: 2.5px solid;
    border-radius: 20px;
    font-size: 13px;
    cursor: pointer;
    background:white;
}
h2
{
    font-family: sans-serif;
    font-weight:lighter;
    font-size: 40px;
    margin-left: 30px;
    margin-top: 27px;
    margin-bottom: 20px;
    color:#fb5283;
}
.table-bordered
{
    border-radius: 20px;
}
.Accounts, .Orders, .Donations
{
    color: #fb5283;
}
.table-bordered
{
    height: 120px;
    width: 100%;
    font-size:15px;
}
td
{
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
}
</style>
    <div class="containar">
        <div class="navbar">
        <img src="Embark.jpg" class="logo">
        <nav>
            <ul>
            <li><a href="AdminHome.php">Accounts</a></li>
            <li><a href="Orders.php">Orders</a></li>
            <li><a href="" class="Orders">Donations</a></li>
            <li><a href="Home.html"><button type="submit" class="button1">Log Out</button></a></li>
            </ul>
        </nav>
    </div>
    <div class="container2">
        <h2>Donations</h2>
        <table class="table-bordered">
            <thead>
                <tr>
                    <th>Donation ID</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Payment Option</th>
                    <th>Amount</th>
                </tr>
            </thead>
        <tbody>
<?php
    
    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            ?>
            <tr>
            <td><?php echo $row['DonID']; ?></td>
            <td><?php echo $row['FName']; ?></td>
            <td><?php echo $row['Add']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['CNum']; ?></td>
            <td><?php echo $row['PayM']; ?></td>
            <td><?php echo $row['Amo']; ?></td>
            </tr>

            <?php
        }
    } 
    else 
    {
        echo '<tr><td colspan="6">No records found</td></tr>';
    }
?>
        </tbody>
        </table>
    </div>
</div>
</body>
</html>