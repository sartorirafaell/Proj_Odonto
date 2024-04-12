<?php 
    class PacienteDAO {
        
        public function cadastrarPaciente(PacienteModel $paciente){
            include_once 'Conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "INSERT INTO paciente (nomePac, whatsPac, tratamentoPac, mensagemPac)
            VALUES (:nome, :whats, :tratamento, :mensagem)";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':nome', $paciente->getNome());
            $stmt->bindValue(':whats', $paciente->getWhats());
            $stmt->bindValue(':tratamento', $paciente->getTratamento());
            $stmt->bindValue(':mensagem', $paciente->getMensagem());
           

            $res = $stmt->execute();
            if($res)
            {
                echo "<script>alert('Cadastro realizado com sucesso');</script>";
            }
            else{
                echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
            }
            echo "<script>location.href='../controller/processaPaciente.php?op=listar';</script>";
        }

        public function listarPacientes()
        {
            include_once 'Conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "SELECT * FROM paciente ORDER BY idPac";
            return $conex->conn->query($sql);
        }

        public function resgataPorID($idPac)
        {
            include_once 'Conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "SELECT * FROM paciente WHERE idPac='$idPac'";
            return $conex->conn->query($sql);
        }
       

        // public function alterarPaciente(PacienteModel $paciente)
        // {
        //     include_once 'Conexao.php';
        //     $conex = new Conexao();
        //     $conex->fazConexao();
        //     $sql = "UPDATE paciente SET nomePac = :nome, whatsPac = :whats, tratamentoPac = :tratamento,
        //     mensagemPac = :mensagem WHERE idPac = :id";

        //     $stmt = $conex->conn->prepare($sql);
        //     $stmt->bindValue(':id', $paciente->getID());
        //     $stmt->bindValue(':nome', $paciente->getNome());
        //     $stmt->bindValue(':whats', $paciente->getWhats());
        //     $stmt->bindValue(':tratamento', $paciente->getTratamento());
        //     $stmt->bindValue(':mensagem', $paciente->getMensagem());
            

        //     $res = $stmt->execute();
        //     if($res)
        //     {
        //         echo "<script>alert('Registro Alterado com sucesso');</script>";
        //     }
        //     else{
        //         echo "<script>alert('Erro: Não foi possível alterar o cadastro');</script>";
        //     }
        //     echo "<script>location.href='../controller/processaPaciente.php?op=listar';</script>";

        // }
        public function alterarPaciente(PacienteModel $paciente)
{
    include_once 'Conexao.php';
    $conex = new Conexao();
    $conex->fazConexao();
    $sql = "UPDATE paciente SET nomePac = :nome, whatsPac = :whats, tratamentoPac = :tratamento,
    mensagemPac = :mensagem WHERE idPac = :id";

    $stmt = $conex->conn->prepare($sql);
    $stmt->bindValue(':id', $paciente->getID());
    $stmt->bindValue(':nome', $paciente->getNome());
    $stmt->bindValue(':whats', $paciente->getWhats());
    $stmt->bindValue(':tratamento', $paciente->getTratamento());
    $stmt->bindValue(':mensagem', $paciente->getMensagem());

    $res = $stmt->execute();

    return $res;
}

        public function excluirPaciente($idPac)
        {
            include_once 'Conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "DELETE FROM paciente WHERE idPac='$idPac'";
            $res = $conex->conn->query($sql);
            if($res)
            {
                echo "<script>alert('Exclusão realizada com sucesso!');</script>";
            }
            else{
                echo "<script>alert('Não foi possível excluir o usuário!');</script>";
            }
            echo "<script>location.href='../controller/processaPaciente.php?op=listar';</script>";
        }

    }
?>