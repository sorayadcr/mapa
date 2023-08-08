<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <title>Depósito Bancário - Picaretas Bank</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Picaretas Bank</h1>
        <h2>Depósito Bancário</h2>

        <form method="post" action="deposito.php">
            <label for="numeroConta">Número da Conta:</label>
            <input type="text" id="numeroConta" name="numeroConta" required>

            <label for="valorDeposito">Valor do Depósito (R$):</label>
            <input type="number" id="valorDeposito" name="valorDeposito" step="0.01" required>

            <button type="submit">Realizar Depósito</button>
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $numeroConta = isset($_POST['numeroConta']) ? $_POST['numeroConta'] : '';
    $valorDeposito = isset($_POST['valorDeposito']) ? floatval($_POST['valorDeposito']) : 0;

    // Verificar se a conta existe (pode ser feito usando um array ou uma consulta ao banco de dados)
    $contas = array(
        "12345" => array("nome" => "Samuel Rodrigues", "saldo" => 1500, "chequeEspecial" => 1500),
        "67890" => array("nome" => "Sandra do Carmo", "saldo" => 3000, "chequeEspecial" => 3000)
    );

    if (isset($contas[$numeroConta])) {
        // Realizar o depósito
        $contas[$numeroConta]['saldo'] += $valorDeposito;
        echo "Depósito realizado com sucesso! Saldo atual: R$ " . number_format($contas[$numeroConta]['saldo'], 2, ',', '.');
    } else {
        echo "Conta não encontrada.";
    }
}
?>
    </div>
</body>

</html>