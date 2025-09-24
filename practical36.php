
<html>
<body>
    <form action="" method="get">
        <label for="name">Name</label> <br><br>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit"> <br><br>
    </form>  
    
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name']; 
        echo "Hello, $name!";
    }
    ?>
</body> 
</html>
