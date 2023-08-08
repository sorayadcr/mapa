<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <title>Retirada/Saque - Picaretas Bank</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Picaretas Bank</h1>
        <h2>Retirada/Saque</h2>

        <form method="post" action="retirada_saque.php">
            <label for="numeroConta">Número da Conta:</label>
            <input type="text" id="numeroConta" name="numeroConta" required>

            <label for="valorSaque">Valor do Saque (R$):</label>
            <input type="number" id="valorSaque" name="valorSaque" step="0.01" required>

            <button type="submit">Realizar Saque</button>
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $numeroConta = isset($_POST['numeroConta']) ? $_POST['numeroConta'] : '';
    $valorSaque = isset($_POST['valorSaque']) ? floatval($_POST['valorSaque']) : 0;

    // Verificar se a conta existe (pode ser feito usando um array ou uma consulta ao banco de dados)
    $contas = array(
        "12345" => array("nome" => "Samuel Rodrigues", "saldo" => 1500, "chequeEspecial" => 1500),
        "67890" => array("nome" => "Sandra do Carmo", "saldo" => 3000, "chequeEspecial" => 3000)
    );

    if (isset($contas[$numeroConta])) {
        // Realizar o saque se houver saldo suficiente
        if ($contas[$numeroConta]['saldo'] + $contas[$numeroConta]['chequeEspecial'] >= $valorSaque) {
            $contas[$numeroConta]['saldo'] -= $valorSaque;
            echo "Saque realizado com sucesso! Saldo atual: R$ " . number_format($contas[$numeroConta]['saldo'], 2, ',', '.');
        } else {
            echo "Saldo insuficiente para realizar o saque.";
        }
    } else {
        echo "Conta não encontrada.";
    }
}
?>
    </div>
</body>

</html>