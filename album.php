<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title></title>
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
            <form action="filuppladning.php" method="post" enctype="multipart/form-data">
               <input type="file" name="file">
               <button type="submit" name="submit">Upload</button>
            </form>
            <?php
               session_start();

                 if (isset($_SESSION["filnamn"])) {
                     if (!empty($_SESSION["filnamn"])) {
                         echo "Filen " . $_SESSION["filnamn"] . " är uppladad.";
                     } else {
                         echo "Uppladning misslyckad.";
                     }
                 }
                session_destroy();

                 ?>
            <h2>Album</h2>
            <?php
               $directory = "uploads";
               $fileList= scandir($directory);

               foreach ($fileList as $file) {
                   if (!in_array($file ,array(".",".."))) {
                       echo "<a href=\"uploads/$file\"><img src=\"uploads/$file\"></a>";
                   }
               }

                       ?>
         </main>
         <footer>
         </footer>
      </div>
   </body>
</html>
