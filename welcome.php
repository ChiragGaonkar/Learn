<?php
include 'config.php';
$sql = "CREATE TABLE EMPLOYEE(
    EID int(100) PRIMARY KEY,
    ENAME VARCHAR(200) NOT NULL,
    EPHONE BIGINT(100) NOT NULL,
    ELNAME VARCHAR(200) NOT NULL
)";
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