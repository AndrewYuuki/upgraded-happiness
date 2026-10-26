<?php 
$host ="localhost";
$banco = "sistema_login";
$usuario = "root";
$senha = "";

try {
    $pdo = new PDO (
        "mysql:host=$host;dbname=$banco;charset=utfmb4",
        $usuario,
        $senha,
        [
            PDO::ATTR_ERRORMODE => PDO::ERRORMODE_EXEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ELEMENT_PREPARES => false
        ]
    );
    
} catch(PDOExcepton $e) {
    error_log($e ->getMessage());
    exit("Não foi possivel se conectar ao banco de dados");
}
?>