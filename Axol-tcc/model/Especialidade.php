<?php
       require_once("../model/Conexao.php");
       require_once("../model/PrestadorServico.php"); //FK

    class Especialidade{

        private $codEspecialidade;
        private $nomeEspecialidade;
        private $especieEspecialidade;
        private $codPrestadorServico;
        private $prestadorServico;
       
        //Getters
        public function getCodEspecialidade(){
            return $this->codEspecialidade;
        }
        public function getNomeEspecialidade(){
            return $this->nomeEspecialidade;
        }
        public function getEspecieEspecialidade(){
            return $this->especieEspecialidade;
        }
        public function getCodPrestadorServico(){ //FK
            return $this->codPrestadorServico;
        }
        public function getPrestadorServico(){ //FK
            return $this->prestadorServico;
        }

        //Setters
        public function setCodEspecialidade($codEspecialidade){
            $this->codEspecialidade = $codEspecialidade;
        }
        public function setNomeEspecialidade($nomeEspecialidade){
            $this->nomeEspecialidade = $nomeEspecialidade;
        }
        public function setEspecieEspecialidade($especieEspecialidade){
            $this->especieEspecialidade = $especieEspecialidade;
        }

        public function setCodPrestadorServico($codPrestadorServico){ //FK
            $this->codPrestadorServico = $codPrestadorServico;
        }
        public function setPrestadorServico($prestadorServico){ //FK
            $this->prestadorServico = $prestadorServico;
        }
       

       //Cadastrar
        public function cadastrar ($especialidade){
            $_SESSION['especialidade'] = $especialidade->getNomeEspecialidade();//--
            $_SESSION['especie'] = $especialidade->getEspecieEspecialidade();//--
    
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbespecialidade(codEspecialidade,nomeEspecialidade, 
            especieEspecialidade,codPrestadorServico) VALUES(?,?,?,?)");
            $stmt->bindvalue(1, $especialidade->getCodEspecialidade());
            $stmt->bindvalue(2, $especialidade->getNomeEspecialidade());
            $stmt->bindvalue(3, $especialidade->getEspecieEspecialidade());
            $stmt->bindvalue(4, $especialidade->getPrestadorServico()); //FK           
        
            $stmt->execute();
                                                                               
        }

        //Listar
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codEspecialidade,nomeEspecialidade,especieEspecialidade
                            FROM tbespecialidade";   
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        //Deletar
        public function deletar($codEspecialidade) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbespecialidade WHERE codEspecialidade = $codEspecialidade";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

        //Listar Especialidade
        public function listarEspecialidade($codEspecialidade) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codEspecialidade,nomeEspecialidade,especieEspecialidade
                            FROM tbespecialidade WHERE codEspecialidade = $codEspecialidade";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }


        //Alterar
        public function alterar($codEspecialidade, $nomeEspecialidade, $especieEspecialidade, )
        {
            $conexao = Conexao::conectar();   
            $stmt = $conexao->prepare("UPDATE tbespecialidade
            SET nomeEspecialidade = ?, especieEspecialidade = ? WHERE codEspecialidade = ?");
         
            $stmt->bindParam(1, $nomeEspecialidade); //Sempre manter na mesma ordem do UPDATE
            $stmt->bindParam(2, $especieEspecialidade);
            $stmt->bindParam(3, $codEspecialidade); //FK
                        
        
            $stmt->execute();

        }

        
        //FUNÇÃO SISTEMA DE BUSCAS
        public function pesquisaEspecialidade($nomeEspecialidade) {
            $conexao = Conexao::conectar();
            $querySelect= "SELECT codEspecialidade,nomeEspecialidade,especieEspecialidade,codPrestadorServico
                                    FROM tbespecialidade 
                                    WHERE nomeEspecialidade LIKE '%$nomeEspecialidade%'";

            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }
     
?>
