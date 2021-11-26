<?php
include 'config.php';
$sql = "INSERT INTO EMPLOYEE(EID,ENAME,EmployeePhoneNumber,ELNAME) VALUES 
(1,'Chirag',9822688251,'Gaonkar'),
(2,'Akash',98226228251,'Naik'),
(3,'Manmmet',9844688251,'Pandey'),
(4,'Ajay',9822644351,'Dravid')";
$RESULT = $conn->query($sql);
if ($RESULT) {
    echo "<script>alert('Done')</script>";
} else {
    echo "<script>alert('Error')</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>

</body>

</html>