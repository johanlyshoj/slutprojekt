<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Skriva till en fil</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
    if (isset($_POST['inlagg'])) {
        $filnamn = "blogg.txt";

        // Öppna asnslutningen till textfilen
        if (!$fil = fopen($filnamn, 'a+')) {
            echo "Kan inte öppna fil ($filnamn)";
            exit;
        } else {
            echo "filen är öppen";
        }

        // laddar upp ifrån blogg.txt
        $texten = $_POST['inlagg'];
        $texten = nl2br($texten);
        $texten = trim(preg_replace('/\s+/', ' ', $texten));

        // Skriv text i textfilen
        if (fwrite($fil, "<div class=\"inlagg\"><h4>" . date('h:i Y/m/d') . "</h4><p>" . $texten . " </p></div>\n") === FALSE) {
            echo "kan inte skriva till filen ($filnamn)";
            exit;
        } else {
            echo "Det gick bra att skriva";
        }

        // Stäng anslutningen till textfilen
        fclose($fil);
        echo "<p>Inlägget registrerat!</p>";

    } else {
        echo "<p>Inlägg saknas!</p>";
    }
    ?>

    <?php
    header("Location:  index.php");
    die()
    ?>

</body>
</html>
