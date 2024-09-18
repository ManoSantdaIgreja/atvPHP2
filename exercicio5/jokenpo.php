<?php
function escolherComputador() {
    $opcoes = ['pedra', 'papel', 'tesoura'];
    return $opcoes[array_rand($opcoes)];
}

function determinarVencedor($usuario, $computador) {
    if ($usuario === $computador) {
        return 'Empate!';
    }
    if (
        ($usuario === 'pedra' && $computador === 'tesoura') ||
        ($usuario === 'papel' && $computador === 'pedra') ||
        ($usuario === 'tesoura' && $computador === 'papel')
    ) {
        return 'Você ganhou!';
    }
    return 'Computador ganhou!';
}

$escolhaUsuario = $_POST['escolha'] ?? '';
$escolhaComputador = escolherComputador();
$resultado = determinarVencedor($escolhaUsuario, $escolhaComputador);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Jogo</title>
    <style>
        .resultado {
            text-align: center;
            margin-top: 20px;
        }
        .resultado img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h1>Resultado</h1>
        <p><strong>Sua escolha:</strong></p>
        <img src="<?php echo htmlspecialchars($escolhaUsuario); ?>.png" alt="<?php echo htmlspecialchars($escolhaUsuario); ?>">
        <p><strong>Escolha do Computador:</strong></p>
        <img src="<?php echo htmlspecialchars($escolhaComputador); ?>.png" alt="<?php echo htmlspecialchars($escolhaComputador); ?>">
        <h2><?php echo $resultado; ?></h2>
        <a href="index.html">Jogar novamente</a>
    </div>
</body>
</html>