
<html>
<body>
    <form action="" method="get">
        <label for="name">Name:</label>
        <input type="text" name="name" id=""> <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
        if (isset($_GET["name"])) {
            $name = $_GET["name"];
            echo "Welcome $name";
        }
    ?>
</body>
</html>
