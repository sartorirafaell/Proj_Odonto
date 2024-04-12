<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles-formPaciente.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Área do Administrador</title>
</head>
<body>
<header class="header">
        <div id="logo">
            <a href="index.html" title="Clínica Rafadol">
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
            <a href="../view/menuAdmin.html"  class="admin-btn">Área do Administrador</a>
        </div>

    </header>

    <main> 
    
        
        <?php 

        if(isset($_REQUEST["op"]) && $_REQUEST["op"] == "Alterar") {
            include("../controller/PacienteController.php");
            $res = PacienteController::resgataPorID($_REQUEST["idPac"]);
            $qtd = $res->rowCount();
            
            // Se o paciente for encontrado, preenche os campos do formulário com os valores recuperados
            if($qtd > 0) {
                $row = $res->fetch(PDO::FETCH_OBJ);
                $nome = $row->nomePac;
                $whats = $row->whatsPac;
                $tratamento = $row->tratamentoPac;
                $mensagem = $row->mensagemPac;
                $id = $row->idPac;
                $operacao = "Alterar";
            } else {
                // Caso o paciente não seja encontrado, defina valores padrão
                $nome = "";
                $whats = "";
                $tratamento = "";
                $mensagem = "";
                $id = "";
                $operacao = "Incluir";
            }
        } else {
            // Se não houver operação definida, configure valores padrão para um novo paciente
            $nome = "";
            $whats = "";
            $tratamento = "";
            $mensagem = "";
            $id = "";
            $operacao = "Incluir";
        }
            print "<div class='container'>";
            print "<form method='post' action='../controller/processaPaciente.php'>";
            print "   <input type='text' name='nome' placeholder = 'Nome*' value=".$nome."><br>";
            print "   <input type='text' name='whats' placeholder = 'Whatsapp*' value=".$whats."><br>";
            print "   <input type='text' name='tratamento' placeholder = 'Tratamento*' value=".$tratamento."><br>";
            print "   <textarea name='mensagem' placeholder='Mensagem'>" . htmlspecialchars($mensagem) . "</textarea><br>";
    
            print "   <input type='hidden' name='idPac' value='$id'><br>";
            print "   <input type='hidden' name='op' value='$operacao'><br>";
            print " <button type='submit' class='button-op' value='$operacao'>$operacao</button>";
            // print "   <input type='submit' value='$operacao'>";
            print "   </form>";
            print "<button onclick='history.go(-1);' class='button-voltar'>Voltar</button>"; // Botão Voltar que retorna à página anterior
            print "</div>";
        ?>

        

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