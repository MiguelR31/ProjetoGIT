<?php
session_start();

if(isset($_POST['submit'])) {
    include_once('config.php');

    // Dados do formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta para verificar se o usuário existe no banco de dados
    $query = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = mysqli_query($conexao, $query);
    
    if(mysqli_num_rows($result) > 0) {
        // O usuário foi encontrado, iniciar sessão e redirecionar para a página inicial
        $_SESSION['email'] = $email;
        header('Location: pagina_inicial.php');
        exit;
    } else {
        // Exibir mensagem de erro se as credenciais estiverem incorretas
        $erro = "E-mail ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="verifica_login.php" method="post">
            <h1>Login</h1>

            <?php if(isset($erro)) { ?>
                <p><?php echo $erro; ?></p>
            <?php } ?>

            <div class="field">
                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" required>
            </div>

            <div class="fielde">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha*" required>
            </div>

            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>
