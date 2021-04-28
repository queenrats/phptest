<html>
<head>
    <title>Admin Panel</title>
</head>

<body>
    <h1>Admin Panel</h1>
    <form name="form" action="" method="post">
        <label for="userfield">Username:</label>
        <input type="text" id="userfield" name="userfield">
        <br>
        <label for="passfield">Password:</label>
        <input type="text" id="passfield" name="passfield">
        <br><br>
        <input type="submit" value="Login">
    </form>
    <?php
        $user = $_POST['userfield'];
        $pass = $_POST['passfield'];
        if (($user == "Admin") and ($pass = "hunter2_451")){
            echo "<br>KEY{dGhpc2lzd2h5eW91aGFzaHRoaW5ncw==}";
        }
            
    ?>
</body>
</html>