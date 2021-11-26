<?php
include 'config.php';
$sql = "SELECT * FROM EMPLOYEE";
$result = $conn->query($sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "{$row['EID']}| {$row['ENAME']}|{$row['EmployeePhoneNumber']}|{$row['ELNAME']}<br>";
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