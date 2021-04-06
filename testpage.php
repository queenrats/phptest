<html>
    <head>
        <title>HTML Test Page</title>
    </head>

    <body>
        <h1>HTML Test Page</h1>
        <br><br>
        <p>This page is for quick and easy testing of HTML without having to create a whole new page.</p>
        <br>
        <p>Currently supported tags</p>
        <ul>
            <li>h1</li>
            <li>h2</li>
            <li>h3</li>
            <li>p</li>
            <li>a</li>
            <li></li>

        </ul>

        <br><br><br><br>
        <form name="form" action="" method="post">
            <label for="enter">HTML Test Box</label>
            <textarea id="enter" name="enter" rows="4" cols="50"></textarea>
        </form>
        <?php
            $exp = "/<script>(window.)*alert\(.+\)<\/script>/";
            $text = $_POST['enter'];
            echo "<br><br><br><br>";
            if (preg_match($exp, $text)){
                echo "<script>window.alert('KEY{placeholder}')</script>";
            }
            echo $text;
        ?>
    </body>
</html>