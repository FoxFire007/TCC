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
    die("Erro ao conectar ao banco de dados.");
}

$conexao->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Acesse esta página pelo formulário de cadastro.");
}

$nome = trim($_POST["nome"] ?? "");
$rm = trim($_POST["rm"] ?? "");

if ($nome === "" || $rm === "") {
    exit("Preencha o nome e o RM.");
}

if (strlen($rm) !== 5 || !ctype_digit($rm)) {
    exit("O RM deve conter exatamente cinco números.");
}

if (strlen($nome) > 100) {
    exit("O nome deve ter no máximo 100 caracteres.");
}

// Verifica se o RM já está cadastrado.
$sql = "SELECT RM FROM tb_alunos WHERE RM = ?";
$consulta = $conexao->prepare($sql);

if (!$consulta) {
    exit("Erro ao preparar a consulta.");
}

$consulta->bind_param("s", $rm);
$consulta->execute();
$consulta->store_result();

if ($consulta->num_rows > 0) {
    $consulta->close();
    $conexao->close();

    exit("Este RM já está cadastrado.");
}

$consulta->close();

// Insere o novo aluno no banco de dados.
$sql = "INSERT INTO tb_alunos (NOME, RM) VALUES (?, ?)";
$insercao = $conexao->prepare($sql);

if (!$insercao) {
    exit("Erro ao preparar o cadastro.");
}

$insercao->bind_param("ss", $nome, $rm);

if ($insercao->execute()) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Não foi possível cadastrar o aluno.";
}

$insercao->close();
$conexao->close();
?>