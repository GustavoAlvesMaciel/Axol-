<?php
       require_once("../model/Conexao.php");
       require_once("../model/PrestadorServico.php"); //FK

    class TelefonePrestador{

        private $codTelefonePrestadorServico;
        private $numeroTelefonePrestadorServico;
        private $codPrestadorServico;
        private $prestadorServico;
        

        //GETTERS
        public function getCodTelefonePrestadorServico(){
            return $this->codTelefonePrestadorServico;
        }
        public function getNumeroTelefonePrestadorServico(){
            return $this->numeroTelefonePrestadorServico;
        }
        public function getCodPrestadorServico(){
            return $this->codPrestadorServico;
        }
        public function getPrestadorServico(){
            return $this->prestadorServico;
        }

        //SETTERS
        public function setCodTelefonePrestadorServico($codTelefonePrestadorServico){
            $this->codTelefonePrestadorServico = $codTelefonePrestadorServico;
        }
        public function setNumeroTelefonePrestadorServico($numeroTelefonePrestadorServico){
            $this->numeroTelefonePrestadorServico = $numeroTelefonePrestadorServico;
        }
        public function setCodPrestadorServico($codPrestadorServico){
            $this->codPrestadorServico = $codPrestadorServico;
       }
        public function setPrestadorServico($prestadorServico){
            $this->prestadorServico = $prestadorServico;
       }
        
        //CADASTRAR
        public function cadastrar ($telefoneprestador){
            $_SESSION['telefone'] = $telefoneprestador->getNumeroTelefonePrestadorServico();//--
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbtelefoneprestadorservico(codTelefonePrestadorServico,numeroTelefonePrestadorServico,codPrestadorServico)
             VALUES(?,?,?)");

            $stmt->bindValue(1, $telefoneprestador->getCodTelefonePrestadorServico());
            $stmt->bindvalue(2, $telefoneprestador->getNumeroTelefonePrestadorServico());
            $stmt->bindvalue(3, $telefoneprestador->getPrestadorServico());
            $stmt->execute();                                                                    
        }

        //Listar
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT codTelefonePrestadorServico, numeroTelefonePrestadorServico, nomePrestadorServico
                            FROM tbtelefoneprestadorservico
                            INNER JOIN tbprestadorservico 
                            ON tbprestadorservico.codPrestadorServico = tbtelefoneprestadorservico.codPrestadorServico";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        //Deletar
        public function deletar($codTelefonePrestadorServico) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbtelefoneprestadorservico WHERE codTelefonePrestadorservico = $codTelefonePrestadorServico";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

         //DELETAR TUDO TELEFONE PRESTADOR
         public function deletarPrestador($codPrestadorServico){ //FK 'codPrestadorServico' na tbtelefonePrestadorServico
            $conexao = Conexao::conectar();
            $querySelect = "DELETE tbprestadorservico, tbtelefoneprestadorservico FROM tbprestadorservico
            INNER JOIN tbtelefoneprestadorservico ON tbtelefoneprestadorservico.codPrestadorServico = tbprestadorservico.codPrestadorServico
            WHERE codPrestadorServico = $codPrestadorServico";

            $resultado = $conexao->query($querySelect);
            return $resultado;
        }

        //Listar Telefone Prestador
        public function listarTelefonePrestador($codTelefonePrestadorServico) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codTelefonePrestadorServico, numeroTelefonePrestadorServico, codPrestadorServico 
                            FROM tbtelefoneprestadorservico WHERE codTelefonePrestadorServico = $codTelefonePrestadorServico";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        //Alterar
        public function alterar($codTelefonePrestadorServico, $numeroTelefonePrestadorServico, $codPrestadorServico)
        {
            $conexao = Conexao::conectar();   
            $stmt = $conexao->prepare("UPDATE tbtelefoneprestadorservico
            SET numeroTelefonePrestadorServico = ?, codPrestadorServico = ? WHERE codTelefonePrestadorServico = ?");
         
            $stmt->bindParam(1, $numeroTelefonePrestadorServico);
            $stmt->bindParam(2, $codPrestadorServico);
            $stmt->bindParam(3, $codTelefonePrestadorServico);             
        
            $stmt->execute();

        }

    }
     
?>