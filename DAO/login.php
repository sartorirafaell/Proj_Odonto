 <!--                      AREA DO PHP                     -->
 <?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinica_odonto";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processa o formulário de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém as credenciais do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar as credenciais no banco de dados
    $sql = "SELECT * FROM administrador WHERE login='$username' AND senha='$password'";
    $result = $conn->query($sql);

    // Verifica se encontrou um registro correspondente
    if ($result->num_rows == 1) {
        // Login bem sucedido, redireciona para a página menuAdmin.html
        header("Location: ../view/menuAdmin.html");
        exit();
    } 
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
 <!--                      FIM DA AREA DO PHP                     -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login-adm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Área do Administrador</title>
</head>
<body>



<header class="header">
        <div id="logo">
            <a href="index.php" title="Clínica Rafadol">
                <img src="../imagens/logoClinica.png" alt="Clínica Rafadol">
            </a>
            
        </div>
        <nav class="menu">
            <ul>
                <li><a href="../index.php">Página Inicial</a></li>
                <li><a href="../view/tratamentos.html">Tratamentos</a></li>
                <li><a href="../view/info-dicas.html">Informativo/Dicas</a></li>
                <li><a href="../view/sobrenos.html">A Clínica</a></li>
            </ul>
        </nav>
        <div class="admin-area">
            <a href="login.php"  class="admin-btn">Área do Administrador</a>
        </div>
    </header>

    <main>
    <section class="container">
    <div class="rounded-box">
        <form action="login.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password"><br><br>
            <button type="submit">Entrar</button>
        </form>
        
    </div>
    <div class="error-container">
                <?php
                    // Verifica se houve erro de login e exibe mensagem de erro
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($result) && $result->num_rows != 1) {
                        echo "<div class='error-message'>Credenciais inválidas. Tente novamente.</div>";
                    }
                ?>
            </div>
    </section>
    </main>

     <!-- INICIO DO FOOTER -->
 <footer>
    

    <section id="networkFooter" class="bg-clean">
                <div class="conteudo-network">
            <div id="contentNetworkFooter">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div id="logo2">
                            <a href="index.php" title="Clínica Rafadol">
                                <figure class="transition-all">
                                    <img src="../imagens/logoClinicaWhite.png" alt="Clínica Rafadol" loading="lazy" height="66" width="115" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div id="contentNetwork" class="color-default d-flex align-items-center justify-content-lg-between">
                            <figure class="transition-all me-3">
                                <img src="https://clinicabiehl.com.br/themes/default/assets/images/facebook.svg" alt="Facebook Clínica Biehl" loading="lazy" width="36" height="34" class="img-fluid">
                            </figure>

                            <figure class="transition-all">
                                <img src="https://clinicabiehl.com.br/themes/default/assets/images/instagram.svg" alt="Instagram Clínica Biehl" loading="lazy" width="38" height="38" class="img-fluid">
                            </figure>

                            <ul class="list-network d-flex">
                                                                <li>
                                    <a href="https://instagram.com/_sartorirafael" target="_blank"><span>@_sartorirafael</span></a>
                                                                </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="copyright" class="text-center color-default d-flex align-items-center justify-content-center">
            
                <p>
                    © 2024 Clínica Rafadol - Desenvolvido por Rafael.
                </p>
            
        </div>
    </section>

    </footer>
    
 <!-- FIM DO FOOTER -->

</body>
</html>