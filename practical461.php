<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = "Guest";
}
?>

<html>
<body>
    <h2>Thank you <?php echo $name; ?>, we will contact you soon!</h2>
</body>
</html>
