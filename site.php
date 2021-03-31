<html>
    <head>
            <title>Debug Panel</title>
    </head>


    <body>
        <h1>Debug Panel</h1>
        <h2>FOR INTERNAL ADMIN USE ONLY</h2>
        <p>This panel lets you see DB info for each user without having to connect directly to the MySQL database, as long as you know their username.</p>
        <br><br><br><br>
        <form name="form" action="" method="post">
        <label for="id_field">Please enter a Username:</label>
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
    echo "Connected to MySQL server successfully<br><br>";
    
    
    $search = $_POST['id_field'];

    $sql = "SELECT * FROM Users WHERE Username = '". $search. "'";
    $result = mysqli_query($conn, $sql);

    if (!empty($result)) {
        echo "Selected Username details:<br><br>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["UserID"]. " - Username: ". $row["Username"]. " - Password: ". $row["Password"]. " - isAdmin: ". $row["isAdmin"]. "<br>";
            
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