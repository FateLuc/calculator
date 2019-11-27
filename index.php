
<html>
<head>

</head>
<body>

<?php
$data = $_POST['number'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
    if (isset($_POST['number']) && $_POST['number'] != "") {



            $myfile = fopen("data.txt", "r") or die("Unable to open file!");
            echo fread($myfile, filesize("data.txt" ));
        }
    ?>
    <form method="post">
        <input type="text" name="number"> <br> <br>
        <input type="submit">
    </form>
</body>
</html>