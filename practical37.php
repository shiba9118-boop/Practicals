<html>
<body>
    <form action="" method="get">
        <label for="">Name</label>
        <input type="text" name="name"> <br><br>
        
        <label for="">Age</label>
        <input type="text" name="age"> <br><br>
        
        <button>Submit</button>
    </form>
</body>
</html>

<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    echo "Hello $name, you are $age years old.";
}
?>
