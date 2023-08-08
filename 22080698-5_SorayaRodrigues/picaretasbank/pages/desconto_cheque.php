<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <title>Desconto de Cheque - Picaretas Bank</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Picaretas Bank</h1>
        <h2>Desconto de Cheque</h2>

        <form method="post" action="desconto_cheque.php">
            <label for="valorCheque">Valor do Cheque (R$):</label>
            <input type="number" id="valorCheque" name="valorCheque" step="0.01" required>

            <button type="submit">Calcular Desconto</button>
        </form>
         
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter o valor do cheque informado pelo usuário
    $valorCheque = isset($_POST['valorCheque']) ? floatval($_POST['valorCheque']) : 0;

    // Calcular o desconto do cheque (por exemplo, 10%)
    $desconto = $valorCheque * 0.1;

    // Calcular o valor após o desconto
    $valorFinal = $valorCheque - $desconto;
}
?>
    </div>
</body>

</html>