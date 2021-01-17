<?php
//The following code is what would be used to connect to database using the PDO library.
 $pdo = new
     PDO(
         "mysql:host=localhost;dbname=mydb",
         "myUsername",
         "myPassword",
     );
 $pdo->setAttribute(
     PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
 );
