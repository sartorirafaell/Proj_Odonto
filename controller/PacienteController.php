<?php 
    class PacienteController{

        public static function cadastrarPaciente($nome, $whats, $tratamento, $mensagem)
        {
            include '../model/PacienteModel.php';
            $paciente = new PacienteModel(null, $nome, $whats, $tratamento, $mensagem);
            $paciente->cadastrarPaciente($paciente);
        }

        public static function listarPacientes()
        {
            include '../model/PacienteModel.php';
            $model = new PacienteModel(null, null, null, null, null);
            return $model->listarPacientes();
        }

        public static function resgataPorID($idPac){
            include '../model/PacienteModel.php';
            $model = new PacienteModel(null, null, null, null, null);
            return $model->resgataPorID($idPac);
        }

        // public static function alterarPaciente($id, $nome, $whats, $tratamento, $mensagem)
        // {
        //     include '../model/PacienteModel.php';
        //     $paciente = new PacienteModel($id, $nome, $whats, $tratamento, $mensagem);
        //     $paciente->alterarPaciente($paciente);
        // }
        public static function alterarPaciente($id, $nome, $whats, $tratamento, $mensagem)
{
    include_once '../model/PacienteModel.php';
    $paciente = new PacienteModel($id, $nome, $whats, $tratamento, $mensagem);
    $result = $paciente->alterarPaciente($paciente);

    if($result) {
        header("Location: ../controller/processaPaciente.php?op=listar");
        exit();
    } else {
        // Trate o erro de alguma forma apropriada, como exibindo uma mensagem de erro para o usuário
        echo "<script>alert('Erro: Não foi possível alterar o cadastro');</script>";
    }
}

        public static function excluirPaciente($id)
        {
            include '../model/PacienteModel.php';
            $paciente = new PacienteModel(null, null, null, null, null);
            $paciente->excluirPaciente($id);
        }
    }
?>