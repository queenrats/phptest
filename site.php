<html>
    <head>
            <title>PHP Test</title>
    </head>


    <body>
        <?php> echo '<p>Hello World!</p>'; ?>
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
    
    $sql = "SELECT * FROM Users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["UserID"]. " - Username: ". $row["Username"]. " - Password: ". $row["Password"]. "<br>";
        }
        } else {
            echo "0 results";
        }
        
        
    mysqli_close($conn);    
        ?>
    </body>
</html>