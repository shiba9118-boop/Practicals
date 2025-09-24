
<html>
<body>
    <form action="" method="get">
        <label for="">Marks</label>
        <input type="number" name="marks"> <br><br>
        <button>Submit</button>
    </form>

    <?php 
        if (isset($_GET['marks'])) {
            $marks = $_GET['marks'];

            if ($marks >= 40) {
                echo "Pass";
            } else {
                echo "Fail";
            }
        }
    ?>
</body>
</html>
