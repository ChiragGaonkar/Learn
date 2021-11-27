<?php
include 'config.php';
$sql = "UPDATE EMPLOYEE SET ENAME = 'Viraj' where EID = 2";
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