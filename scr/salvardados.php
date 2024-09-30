<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Java Script HTTP Requests</title>
</head>

<body>

<?php
/*
header("Access-Control-Allow-Origin: *"); // Permite requisições de qualquer origem                  //Em caso de erros na hora da coneção é só habilitar esse código
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin, Authorization");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Fiap_JD_2024";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $parametro1 = $_POST['parametro1'];
  $parametro2 = $_POST['parametro2'];
  // SQL para inserir os dados no banco
  $sql = "INSERT INTO Carrinho (localizacao, peso) VALUES ('$parametro1', '$parametro2')";

  if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>

</body>

</html>