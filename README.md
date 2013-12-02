Sistema-de-Cadastro-de-Carros v0.1
=============================

 Developed in PHP with YiiFramework, Bootstrap and PostgreSQL (2013).
 

REQUIREMENTS:
=============================
  PHP5, and Postgre PDO.


INSTALLATION
=============================

  EXTRACT FILES TO SERVER, IMPORT THE BACKUP FILE (db.backup) TO POSTGRESQL DATABASE, AND RUN THE index.php IN YOUR BROWSER.


  DATABASE CONFIG IN: "carros/protected/config/main.php":

   ```php
     'db'=>array(
               'connectionString' => 'pgsql:host=localhost;port=5432;dbname=teste',
               'username' => 'postgres',
               'password' => '123',
               'charset' => 'utf8'),
               (...)
   ```

