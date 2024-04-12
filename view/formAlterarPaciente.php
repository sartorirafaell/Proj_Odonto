<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
        include("../controller/PacienteController.php");
        $res = PacienteController::resgataPorID($_REQUEST["idPac"]);
        $qtd = $res->rowCount();
        $row = $res->fetch(PDO::FETCH_OBJ);

        print "<form method='post' action='../controller/processaPaciente.php'>";
        print "     <label for='nome'>Nome:</label>";
        print "     <input type='text' name='nome' value=".$row->nomePac."><br>";
        
        print "     <label for='whats'>Whatsapp:</label>";
        print "     <input type='text' name='whats' value=".$row->whatsPac."><br>";
        
        print "     <label for='tratamento'>Tratamento:</label>";
        print "     <input type='text' name='tratamento' value=".$row->tratamentoPac."><br>";

        print "     <label for='mensagem'>Mensagem:</label>";
        print "     <input type='text' name='mensagem' value=".$row->mensagemPac."><br>";


        print "     <input type='hidden' name='idPac' value=".$row->idPac."><br>";
        print "     <input type='hidden' name='op' value='alterar'><br>";
        print "     <input type='submit' value='Alterar'>";  

        print "     </form>";
    ?>

</body>
</html>