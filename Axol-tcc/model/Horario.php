<?php
       require_once("../model/Conexao.php");
       require_once("../model/PrestadorServico.php"); //FK

    class Horario{

        private $codHorario;
        private $diaSemanaHorario;
        private $aberturaHorario;
        private $fechamentoHorario;
        private $codPrestadorServico;
        private $prestadorServico;

       
        //Getters
        public function getCodHorario(){
            return $this->codHorario;
        }
        public function getDiaSemanaHorario(){
            return $this->diaSemanaHorario;
        }
        public function getAberturaHorario(){
            return $this->aberturaHorario;
        }
        public function getFechamentoHorario(){
            return $this->fechamentoHorario;
        }
        public function getCodPrestadorServico(){ //FK
            return $this->codPrestadorServico;
        }
        public function getPrestadorServico(){ //FK
            return $this->prestadorServico;
        }


        

        //Setters
        public function setCodHorario($codHorario){
            $this->codHorario = $codHorario;
        }
        public function setDiaSemanaHorario($diaSemanaHorario){
            $this->diaSemanaHorario = $diaSemanaHorario;
        }
        public function setAberturaHorario($aberturaHorario){
            $this->aberturaHorario = $aberturaHorario;
        }
        public function setFechamentoHorario($fechamentoHorario){
            $this->fechamentoHorario = $fechamentoHorario;
        }
        public function setCodPrestadorServico($codPrestadorServico){ //FK
             $this->codPrestadorServico = $codPrestadorServico;
        }
        public function setPrestadorServico($prestadorServico){ //FK
             $this->prestadorServico = $prestadorServico;
        }

       
       //Cadastrar
        public function cadastrar ($horario){
            $_SESSION['dia'] = $horario->getDiaSemanaHorario();//--
            $_SESSION['abertura'] = $horario->getAberturaHorario();//--
            $_SESSION['fechamento'] = $horario->getFechamentoHorario();//--

            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbhorario(codHorario,diaSemanaHorario, 
            aberturaHorario,fechamentoHorario,codPrestadorServico) VALUES(?,?,?,?,?)");
            $stmt->bindvalue(1, $horario->getCodHorario());
            $stmt->bindvalue(2, $horario->getDiaSemanaHorario());
            $stmt->bindvalue(3, $horario->getAberturaHorario());
            $stmt->bindvalue(4, $horario->getFechamentoHorario());
            $stmt->bindvalue(5, $horario->getPrestadorServico());

            $stmt->execute();
                                                                               
        }

        //Listar
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codHorario,diaSemanaHorario,aberturaHorario,fechamentoHorario, nomePrestadorServico
                            FROM tbhorario
                            INNER JOIN tbprestadorservico ON tbprestadorservico.codprestadorservico = tbhorario.codprestadorservico";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        //Deletar
        public function deletar($codHorario) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbhorario WHERE codHorario = $codHorario";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
            
        }

        //DELETAR TUDO HORÁRIO
        public function deletarPrestador($codPrestadorServico){ //FK 'codPrestadorServico' na  na tbHorario
            $conexao = Conexao::conectar();
            $querySelect = "DELETE tbprestadorservico, tbhorario  FROM tbprestadorservico
            INNER JOIN tbhorario ON tbhorario.codPrestadorServico = tbprestadorservico.codPrestadorServico
            WHERE codPrestadorServico = $codPrestadorServico";

            $resultado = $conexao->query($querySelect);
            return $resultado;
        }

        //Listar Horario
        public function listarHorario($codHorario) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codHorario,diaSemanaHorario,aberturaHorario,fechamentoHorario, codPrestadorServico 
                            FROM tbhorario WHERE codHorario = $codHorario";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        //Alterar
        public function alterar($codHorario, $diaSemanaHorario, $aberturaHorario, $fechamentoHorario, $codPrestadorServico)
        {
            $conexao = Conexao::conectar();   
            $stmt = $conexao->prepare("UPDATE tbhorario
            SET diaSemanaHorario = ?, aberturaHorario = ?, fechamentoHorario = ?, codPrestadorServico = ? WHERE codHorario = ?");
         
            $stmt->bindParam(1, $diaSemanaHorario); //Na ordem da sequência de cima
            $stmt->bindParam(2, $aberturaHorario);
            $stmt->bindParam(3, $fechamentoHorario);  
            $stmt->bindParam(4, $codPrestadorServico);
            $stmt->bindParam(5, $codHorario);    

            $stmt->execute();

        }
    
        //FUNÇÃO SISTEMA DE BUSCAS
        public function pesquisaHorario($nomePrestadorServico) {
            $conexao = Conexao::conectar();
            $querySelect= "SELECT codHorario,diaSemanaHorario,aberturaHorario,fechamentoHorario,nomePrestadorServico
                                    FROM tbhorario INNER JOIN tbprestadorservico
                                     ON tbprestadorservico.codPrestadorServico = tbhorario.codPrestadorServico
                                    WHERE nomePrestadorServico LIKE '%$nomePrestadorServico%'";

            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }
     
?>