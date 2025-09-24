
<html>
<body>
    <form action="" method="post">
        Email:  <input type="text" name="email"> <br><br>
        Password: <input type="password" name="password"> <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email === "shiba9118@gmail.com" && $password === "1234") {
            echo "Login successful";
        } else {
            echo "Invalid email or password";
        }
    }
    ?>
</body>
</html>
