<?php
       require_once("../model/Conexao.php");
       require_once("../model/Usuario.php");

    class TelefoneUsuario{

        private $codTelefoneUsuario;
        private $numeroTelefoneUsuario;
        private $codUsuario;
        private $usuario;
        

        //GETTERS
        public function getCodTelefoneUsuario(){
            return $this->codTelefoneUsuario;
        }
        public function getNumeroTelefoneUsuario(){
            return $this->numeroTelefoneUsuario;
        }
        public function getCodUsuario(){ //FK
            return $this->codUsuario;
        }
        public function getUsuario(){ //FK
            return $this->usuario;
        }


        //SETTERS
        public function setCodTelefoneUsuario($codTelefoneUsuario){
            $this->codTelefoneUsuario = $codTelefoneUsuario;
        }
        public function setNumeroTelefoneUsuario($numeroTelefoneUsuario){
            $this->numeroTelefoneUsuario = $numeroTelefoneUsuario;
        }
        public function setCodUsuario($codUsuario){ //FK
            $this->codUsuario = $codUsuario;
       }
        public function setUsuario($usuario){ //FK
            $this->usuario = $usuario;
       }
        

        //CADASTRAR
        public function cadastrar ($telefoneUsuario){
            $_SESSION['telefone'] = $telefoneUsuario->getNumeroTelefoneUsuario();//--
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbtelefoneusuario(codTelefoneUsuario,numeroTelefoneUsuario,codUsuario)
             VALUES(?,?,?)");

            $stmt->bindvalue(1, $telefoneUsuario->getCodTelefoneUsuario());
            $stmt->bindvalue(2, $telefoneUsuario->getNumeroTelefoneUsuario());
            $stmt->bindvalue(3, $telefoneUsuario->getUsuario());

            $stmt->execute();
                                                                               
        }

        //Listar
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT codTelefoneUsuario, numeroTelefoneUsuario, nomeUsuario
                            FROM tbtelefoneusuario
                            INNER JOIN tbusuario ON tbusuario.codUsuario = tbtelefoneusuario.codUsuario";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        //Deletar
        public function deletar($codTelefoneUsuario) { //FUNÇÃO DELETAR TABLE telefoneUsuario
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbtelefoneusuario WHERE codTelefoneUsuario = $codTelefoneUsuario";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

        //DELETAR TUDO
        public function deletarUsuario($codUsuario){ //FK 'codUsuario' na tabela telefoneUsuario
            $conexao = Conexao::conectar();
            $querySelect = "DELETE tbusuario, tbtelefoneusuario FROM tbusuario
            INNER JOIN tbtelefoneusuario ON tbtelefoneusuario.codUsuario = tbusuario.codUsuario
            WHERE codUsuario = $codUsuario";

            $resultado = $conexao->query($querySelect);
            return $resultado;
        }

        //Listar Telefone Usuario
        public function listarTelefoneUsuario($codTelefoneUsuario) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codTelefoneUsuario, numeroTelefoneUsuario, codUsuario 
                            FROM tbtelefoneusuario WHERE codTelefoneUsuario = $codTelefoneUsuario";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        //Alterar
        public function alterar($codTelefoneUsuario, $numeroTelefoneUsuario, $codUsuario)
        {
            $conexao = Conexao::conectar();   
            $stmt = $conexao->prepare("UPDATE tbtelefoneusuario
            SET numeroTelefoneUsuario = ?, codUsuario = ? WHERE codTelefoneUsuario = ?");
         
            $stmt->bindParam(1, $numeroTelefoneUsuario); //Deixar sempre na ordem que ta no update
            $stmt->bindParam(2, $codUsuario);
            $stmt->bindParam(3, $codTelefoneUsuario);             
        
            $stmt->execute();

        }

    }
     
?>