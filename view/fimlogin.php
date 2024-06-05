<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <nav>
            <h1>Kelven</h1>
            <ul>
                <a href="#"><li class="menu">Cadastro</li></a>
                
            </ul>
        </nav>
    </header>

    <main>
        <div id="container-form">  
                <form action="../crud/salvarPaciente.php" method="post">
                     <h1>LOGIN</h1>
                    <label for="tName">Nome:</label>
                    <br>
                        <input type="text" name="txtName" id="name" placeholder="Digite seu Nome">
                    <br>
                    <label for="login">Login:</label>
                    <br>
                        <input type="text" name="txtLogin" id="login" placeholder="Digite seu Nome">
                    <br>
                    <label for="login">Senha:</label>
                    <br>
                        <input type="password" name="txtSenha" id="senha" placeholder="Digite sua senha">
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