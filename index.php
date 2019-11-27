
<html>
<head>

</head>
<body>

<?php
if (isset($_POST['number']) && $_POST['number'] != "") {

    $data = $_POST['number'];
    $fp = fopen('data.txt', 'a');
    fwrite($fp, $data);
    fclose($fp);


    $myfile = fopen("data.txt", "r") or die("Unable to open file!");
            echo fread($myfile, filesize("data.txt" ));
        }
    ?>
    <form method="post">
        <input type="text" name="number"> <br> <br>
        <input type="submit">
    </form>
        <form action="clear.php" method="post">

            <input type="hidden" name="action" value="empty">
            <input type="submit" value="empty" onclick="" />
    </form>
</body>
</html>