<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <title>Pagamento de Faturas - Picaretas Bank</title>
    <link rel="stylesheet" href="../picaretasbank/css/styles.css">
</head>

<body>
    <div class="pagamentos">
        <h1>Picaretas Bank</h1>
        <h2>Pagamento de Faturas</h2>

        <form>
            <label for="nomeFornecedor">Nome do Fornecedor:</label>
            <input type="text" id="nomeFornecedor" name="nomeFornecedor" required>

            <label for="valorFatura">Valor da Fatura (R$):</label>
            <input type="number" id="valorFatura" name="valorFatura" step="0.01" required>

            <label for="dataVencimento">Data de Vencimento:</label>
            <input type="date" id="dataVencimento" name="dataVencimento" required>

            <button type="submit">Pagar Fatura</button>
        </form>
    </div>
</body>

</html>