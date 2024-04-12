<?php 
    class PacienteModel {

        //Atributos
        protected $nome;
        protected $whats;
        protected $tratamento;
        protected $mensagem;
        protected $id;

        public function __construct($id, $nome, $whats, $tratamento, $mensagem){
            $this->id = $id;
            $this->nome = $nome;
            $this->whats = $whats;
            $this->tratamento = $tratamento;
            $this->mensagem = $mensagem;
        }
        
        public function getID()
        {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
        // Getter e Setter para $whats
        public function getWhats() {
            return $this->whats;
        }
    
        public function setWhats($whats) {
            $this->whats = $whats;
        }
    
        // Getter e Setter para $tratamento
        public function getTratamento() {
            return $this->tratamento;
        }
    
        public function setTratamento($tratamento) {
            $this->tratamento = $tratamento;
        }
    
        // Getter e Setter para $mensagem
        public function getMensagem() {
            return $this->mensagem;
        }
    
        public function setMensagem($mensagem) {
            $this->mensagem = $mensagem;
        }

        public function cadastrarPaciente(PacienteModel $paciente)
        {
            include_once '../dao/PacienteDAO.php';
            $paciente = new PacienteDAO();
            $paciente->cadastrarPaciente($this);
        }

        public function listarPacientes()
        {
            include '../dao/PacienteDAO.php';
            $dao = new PacienteDAO(null);
            return $dao->listarPacientes();
        }

        public function resgataPorID($idPaciente){
            include '../dao/PacienteDAO.php';
            $model = new PacienteDAO(null);
            return $model->resgataPorID($idPaciente);
        }

        // public function alterarPaciente(PacienteModel $paciente){
        //     include_once '../dao/PacienteDAO.php';
        //     $paciente = new PacienteDAO();
        //     $paciente->alterarPaciente($this);
        // }
        public function alterarPaciente(PacienteModel $paciente){
            include_once '../dao/PacienteDAO.php';
            $pacienteDAO = new PacienteDAO();
            return $pacienteDAO->alterarPaciente($this);
        }

        public function excluirPaciente($idPaciente){
            include_once '../dao/PacienteDAO.php';
            $paciente = new PacienteDAO();
            $paciente->excluirPaciente($idPaciente);
        }
    }
?>