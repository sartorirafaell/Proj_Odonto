<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles-formListarPaciente.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Área do Administrador</title>
</head>
<body>

    <header class="header">
        <div id="logo">
            <a href="../index.php" title="Clínica Rafadol">
                <img src="../imagens/logoClinica.png" alt="Clínica Rafadol">
            </a>
            
        </div>
        <nav class="menu">
            <ul>
                <li><a href="../index.php">Página Inicial</a></li>
                <li><a href="tratamentos.html">Tratamentos</a></li>
                <li><a href="info-dicas.html">Informativo/Dicas</a></li>
                <li><a href="sobrenos.html">A Clínica</a></li>
            </ul>
        </nav>

        <div class="admin-area">
            <a href="menuAdmin.html"  class="admin-btn">Área do Administrador</a>
        </div>

    </header>


    <main>

    
    <?php 
        include("../controller/PacienteController.php");
        $res = PacienteController::listarPacientes();
        $qtd = $res->rowCount();
    print "<div class='container'>";
        if($qtd>0){
            print "<table class ='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>Whats</th>";
            print "<th>Tratamento</th>";
            print "<th>Mensagem</th>";
            print "</tr>";

            while ($row = $res->fetch(PDO::FETCH_OBJ)) {

                print "<tr>";
                print "<td>".$row->idPac."</td>";
                print "<td>".$row->nomePac."</td>";
                print "<td>".$row->whatsPac."</td>";
                print "<td>".$row->tratamentoPac."</td>";
                print "<td>".$row->mensagemPac."</td>";
                print "<td>


                <button onclick=\"location.href = '../view/formPaciente.php?op=Alterar&idPac=".$row->idPac."';\">Alterar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) {
                    location.href = '../controller/processaPaciente.php?op=excluir&idPac=".$row->idPac."'; }

                    else { false; }\">Excluir</button>
                    
                    </td>";
                    echo "</form>";
                    print"</tr>";
            }
            print"</table>";
        }
        else{
            echo "<p>Nenhum registro encontrado!</p>";
        }
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
                            <a href="../index.php" title="Clínica Rafadol">
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