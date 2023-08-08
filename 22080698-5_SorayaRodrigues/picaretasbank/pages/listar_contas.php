<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-BR">
    <title>Listar Todas as Contas - Picaretas Bank</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        function listarContas() {
            var contas = {
                "12345": {
                    "nome": "Samuel Rodrigues",
                    "saldo": 1500,
                    "Cheque especial": 1500
                },
                "67890": {
                    "nome": "Sandra do Carmo",
                    "saldo": 3000,
                    "Cheque especial": 3000
                }
            };

            var tabela = document.getElementById("tabela-contas");
            tabela.innerHTML = ""; // Limpar a tabela antes de preencher

            var cabecalho = tabela.createTHead();
            var linhaCabecalho = cabecalho.insertRow();
            var colunaNumero = linhaCabecalho.insertCell(0);
            var colunaNome = linhaCabecalho.insertCell(1);
            var colunaSaldo = linhaCabecalho.insertCell(2);
            var colunaChequeEspecial = linhaCabecalho.insertCell(3);
            colunaNumero.innerHTML = "<b>Número da Conta</b>";
            colunaNome.innerHTML = "<b>Nome</b>";
            colunaSaldo.innerHTML = "<b>Saldo</b>";
            colunaChequeEspecial.innerHTML = "<b>Cheque Especial</b>";

            var corpoTabela = tabela.createTBody();

            for (var numeroConta in contas) {
                var conta = contas[numeroConta];
                var linha = corpoTabela.insertRow();
                var celulaNumero = linha.insertCell(0);
                var celulaNome = linha.insertCell(1);
                var celulaSaldo = linha.insertCell(2);
                var celulaChequeEspecial = linha.insertCell(3);

                celulaNumero.innerHTML = numeroConta;
                celulaNome.innerHTML = conta.nome;
                celulaSaldo.innerHTML = "R$ " + conta.saldo;
                celulaChequeEspecial.innerHTML = "R$ " + conta["Cheque especial"];
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Picaretas Bank</h1>
        <h2>Listar Todas as Contas</h2>

        <button onclick="listarContas()">Listar Todas as Contas</button>
        <table id="tabela-contas">
        </table>
    </div>
</body>

</html>
