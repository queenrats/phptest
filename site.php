<html>
    <head>
            <title>Debug Panel</title>
    </head>


    <body>
        <h1>Debug Panel</h1>
        <h2>FOR INTERNAL USE ONLY</h2>
        <p>This panel lets you see DB info for each user. Admin details are not accessible for security reasons.</p>
        <br><br><br><br>
        <form name="form" action="" method="post">
        <label for="id_field">Please enter User ID:</label>
        <input type="text" id="id_field" name="id_field">
    </form>

        <?php
    $servername = "localhost";
    $username = "phpuser";
    $password = "phpuserPassword";
    $dbname = "datab";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    
    
    $search = $_POST['id_field'];

     $sql = "SELECT * FROM Users WHERE UserID = ". $search;
    $result = mysqli_query($conn, $sql);

    if (!empty($result)) {
        echo "Selected User ID details:<br><br>";
        while($row = mysqli_fetch_assoc($result)) {
            if ($row["isAdmin"] = 1){
                echo "ID: " . $row["UserID"]. " - Username: ". $row["Username"]. " - Password: ". $row["Password"]. "<br>";
            }
        }
        } else {
            echo "0 results";
        }
        
        
    mysqli_close($conn);    
        ?>
    <br><br><br><br><br>
    <a href="admin.php">Admin Panel</a>
    </body>
</html>