<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_alunos";

$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco
);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados.");
}

$conexao->set_charset("utf8mb4");

// Verifica se o formulário enviou o RM
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Acesse o formulário de login primeiro.");
}

$rm = $_POST["rm"] ?? "";

// Verifica se o RM contém cinco números
if (!preg_match('/^[0-9]{5}$/', $rm)) {
    exit("Digite um RM válido com cinco números.");
}

// Prepara a consulta
$sql = "SELECT NOME, RM
        FROM tb_alunos
        WHERE RM = ?";

$stmt = $conexao->prepare($sql);

if ($stmt === false) {
    error_log("Erro SQL: " . $conexao->error);
    exit("Não foi possível realizar a consulta.");
}

// Envia o RM para a consulta
$stmt->bind_param("s", $rm);

// Executa a consulta
if (!$stmt->execute()) {
    error_log("Erro na execução: " . $stmt->error);
    exit("Não foi possível consultar o aluno.");
}

// Armazena o resultado
if (!$stmt->store_result()) {
    error_log("Erro ao armazenar resultado: " . $stmt->error);
    exit("Não foi possível processar o resultado.");
}

// Verifica se encontrou o aluno
if ($stmt->num_rows > 0) {

    $stmt->bind_result($nome, $rmEncontrado);
    $stmt->fetch();

    // Fecha a consulta e a conexão antes do redirecionamento
    $stmt->close();
    $conexao->close();

    header(
        "Location: bemvindo.php?nome=" .
        urlencode($nome) .
        "&rm=" .
        urlencode($rmEncontrado)
    );

    exit;

} else {

    echo "RM não encontrado.";

}

$stmt->close();
$conexao->close();

?>
 