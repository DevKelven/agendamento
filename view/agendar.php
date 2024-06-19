<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Agendamento</title>
</head>
<body>
    <header>
        <nav>
            <h1>Kelven</h1>
            <ul>
                <a href="logUser.html"><li class="menu">login</li></a>
                <a href="agendar.php"><li class="menu">Agendar</li></a>
            </ul>
        </nav>
    </header>

    <main>
        <div id="container-form">  
                <form action="../crud/salvarAgendamento.php" method="post">
                     <h1>Agendamento</h1>
                    <label for="tName">Agendamento:</label>
                    <br>
                        <input type="text" name="txtAgendamento" id="name" placeholder="Digite Agendamento">
                    <br>
                    <label for="login">Paciente:</label>
                    <br>
                        <input type="number" name="txtPaciente" id="login" placeholder="Digite o Número">
                    <br>
                    <label for="login">Data Agendamento:</label>
                    <br>
                        <input type="date" name="data" id="agendamento">
                    <br>   
                    <input type="submit" value="Enviar" id="enviar" onclick="envia()">
                    <input type="reset" value="Limpar" id="limpar">
            </form>
        </div>
    </main>
    
    <footer>
        <p>©Criado em 2024 - Kelven Silva</p>
    </footer>
</body>
<script src="js/script.js"></script>
</html>