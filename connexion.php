<?php

$host = 'localhost'; 
$dbname = 'zoo_de_Brocéliandre';
$dbpass = 'dNkJZyYmANNBN2-H'; 

$username = $_POST['admin'];
$password = $_POST['dNkJZyYmANNBN2-H'];
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);


if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}


$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM utilisateurs WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Connexion réussie, bienvenue $username !";    
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}

$conn->close();
?>
