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

            <p>Skriv om din träning här</p>
            <form action="lagra.php" method="post">
                <textarea name="inlagg"></textarea>
                <br>
                <button>Skicka</button>
            </form>

        </main>
        <footer>

        </footer>
    </div>
</body>

</html>
