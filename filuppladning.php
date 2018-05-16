<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $file = $_FILES ['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if($fileError===0) {
                if ($_fileSize < 100000000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $_SESSION["filnamn"] = $fileName;


                } else {
                    echo "Filen är för stor";
                }
            } else {
                echo "Något gick fel i uppladningen!";
            }
        } else {
            echo "Fel filtyp!";
        }
    }
    header("location: album.php");
    ?>
</body>
</html>
