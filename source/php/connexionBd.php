<?php
function connect_db()
{
    $host = 'localhost';
    $dbname = 'acudb';
    $username = 'tp@t.p';
    $password = 'tptptp';
 
  $dsn = "pgsql:host=$host;port=50080;dbname=$dbname;user=$username;password=$password";
   
  try{
     $conn = new PDO($dsn);
     
     if($conn){
      echo "Connecté à $dbname avec succès!";
     }
  }catch (PDOException $e){
     echo $e->getMessage();
  }


 /*
    $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try
  {
    $connexion=new PDO($dsn,USER,PASSWD);
  }
  catch(PDOException $e)
  {
    printf("Echec connexion : %s\n",
    $e->getMessage());
    exit();
  }
  return $connexion;*/
}
?>