<?php
  include_once 'env.php';

  $conn = new mysqli($servername, $username, $password, $dbname);


  if ($conn && $conn->connect_error) {
    echo "Connexion Error: " . $conn->connect_error; die();
  }
