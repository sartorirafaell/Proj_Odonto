<?php 
    switch($_REQUEST["op"])
    {
        case "Incluir":
            incluir();
            break;
    
        case "Alterar":
            alterar();
            break;
        case "excluir":
            excluir();
            break;
        case "listar";
            listar();
            break;
        default:
            echo "nao encontrou chave";
    }

    function incluir(){
        $nome = $_POST["nome"];
        $whatsapp = $_POST["whats"];
        $tratamento = $_POST["tratamento"];
        $mensagem = $_POST["mensagem"];
        include 'PacienteController.php';
        $contr = new PacienteController();
        $contr->cadastrarPaciente($nome, $whatsapp, $tratamento, $mensagem);
    }


    function alterar(){
        $id = $_REQUEST["idPac"];
        $nome = $_POST["nome"];
        $whatsapp = $_POST["whats"];
        $tratamento = $_POST["tratamento"];
        $mensagem = $_POST["mensagem"];
        include 'PacienteController.php';
        $contr = new PacienteController();
        $contr->alterarPaciente($id, $nome, $whatsapp, $tratamento, $mensagem);
    }

    function excluir(){
        $id = $_REQUEST["idPac"];
        include 'PacienteController.php';
        $contr = new PacienteController();
        $contr->excluirPaciente($id);
    }

    function listar(){
        include '../view/formListarPaciente.php';
    }
?>