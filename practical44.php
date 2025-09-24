
<html>
<body>
    <form action="" method="get">
        Name: <input type="text" name="name" id=""> <br><br>
        Email: <input type="email" name="email" id=""><br><br>
        Message: <textarea name="message" id="" rows="3"></textarea> <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];            
        $email = $_GET['email'] ?? '';    
        $message = $_GET['message'] ?? ''; 

        echo "Thank you $name, your feedback has been submitted.";
    
    }
    ?>
</body>
</html>
