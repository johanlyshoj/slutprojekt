<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Träningsbloggen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Träningsbloggen</h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="current">Startsida</a></li>
                    <li><a href="formular.php">Formulär</a></li>
                    <li><a href="om_mig.php">Om mig</a></li>
                    <li><a href="album.php">Album</a></li>

                </ul>
            </nav>
        </header>
        <main>

            <h2>Senaste uppläggen</h2>
            <?php
            $filnamn = "blogg.txt";

            //öppna anslutningen till textfilen
            $handtag = fopen($filnamn, 'a+');

            $rader = file($filnamn);

            //läs rad för rad i textfilen
            foreach ($rader as $rad) {
                echo"$rad";
            }

            //stäng alstutningen till textfieln
            fclose($handtag);







            ?>
        </main>
        <footer>

        </footer>
    </div>
</body>
</html>
