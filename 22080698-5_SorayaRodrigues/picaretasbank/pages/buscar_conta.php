<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <title>Buscar Conta - Picaretas Bank</title>
    <link rel="stylesheet" href="../picaretasbank/css/styles.css">
</head>

<body>
    <div class="buscar_conta">
        <h1>Picaretas Bank</h1>
       

        <form action="#" method="post">
            <label for="numero_conta">Número da Conta:</label>
            <input type="text" id="numero_conta" name="numero_conta" required>

            <button type="submit">Buscar</button>
        </form>

        <?php
        $contas = array(
            "12345" => array("nome" => "Samuel Rodrigues", "saldo" => 1500, "Cheque especial" => 1500 ),
            "67890" => array("nome" => "Sandra do Carmo", "saldo" => 3000, "Cheque especial" => 3000 )
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero_conta = $_POST["numero_conta"];

            if (array_key_exists($numero_conta, $contas)) {
                $conta = $contas[$numero_conta];
                echo "<h3>Dados da Conta:</h3>";
                echo "Número da Conta: $numero_conta<br>";
                echo "Nome: {$conta['nome']}<br>";
                echo "Saldo: R$ {$conta['saldo']}<br>";
                echo "Cheque Especial: R$ {$conta['saldo']}";
            } else {
                echo "<p>Conta não encontrada.</p>";
            }
        }
        ?>
        
        
    </div>
</body>

</html>