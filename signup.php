<?php
include 'config.php';
$has = 'ok';
$msg = "enter only char";
if (isset($_POST['submit'])) {
    if (!mb_ereg('[A-Z a-z]', $_POST['username'])) {
        $msg = 'Enter Only Character';
        echo $msg;
        $flag = "Not Ok";
    }
}

//phpinfo();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>

</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username">
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword">
            </div>
            <div class="input-group">
                <input type="submit" name="submit">
            </div>
        </form>
    </div>
</body>

</html>