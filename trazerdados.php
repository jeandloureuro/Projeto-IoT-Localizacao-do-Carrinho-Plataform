<?php
header("Access-Control-Allow-Origin: http://localhost/ChallengeFiap2024/index.html");

/*
header("Access-Control-Allow-Origin: *"); // Permite requisições de qualquer origem                  //Em caso de erros na hora da coneção é só habilitar esse código
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin, Authorization");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
*/

// Conectar ao banco de dados
$servername = "localhost"; // Endereço do servidor
$username = "root";     // Usuário do MySQL
$password = "";       // Senha do MySQL
$dbname = "Fiap_JD_2024"; // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta os dados
$sql = "SELECT localizacao, peso FROM Carrinho";
$result = $conn->query($sql);

// Verifica se existem dados
if ($result->num_rows > 0) {
    $data = array();
    // Pega cada linha de dados e coloca em um array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // Retorna os dados como JSON
    echo json_encode($data);
} else {
    echo "[]"; // Retorna um array vazio se não houver resultados
}

$conn->close();
?>