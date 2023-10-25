<?php
       require_once("../model/Conexao.php");
       require_once("../model/Usuario.php");
       require_once("../model/PrestadorServico.php");

    class Avaliacao{

        private $codAvaliacao;
        private $quantAvaliacao;
        private $codPrestadorServico;
        private $prestadorServico;
        private $codUsuario;
        private $usuario;
  
        //GETTERS
        public function getCodAvaliacao(){
            return $this->codAvaliacao;
        }
        public function getQuantAvaliacao(){
            return $this->quantAvaliacao;
        }
        public function getcodPrestadorServico(){
            return $this->codPrestadorServico;
        }
        public function getPrestadorServico(){
            return $this->prestadorServico;
        }
 
        public function getCodUsuario(){
            return $this->codUsuario;
        }
        public function getUsuario(){
            return $this->usuario;
        }
 
        //SETTERS
        public function setCodComentario($codAvaliacao){
            $this->codAvaliacao = $codAvaliacao;
        }
        public function setQuantAvaliacao($quantAvaliacao){
            $this->quantAvaliacao = $quantAvaliacao;
        }
    
          public function setPrestadorServico($prestadorServico){
            $this->prestadorServico = $prestadorServico;
           }
      public function setcodPrestadorServico($codPrestadorServico){
          $this->codPrestadorServico = $codPrestadorServico;
          }

        public function setCodUsuario($codUsuario){
            $this->codUsuario = $codUsuario;
       }
       public function setUsuario($usuario){
        $this->usuario = $usuario;
        }
    
        

        //CADASTRAR
        public function cadastrar ($avaliacao){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbavaliacao(quantAvaliacao,codPrestadorServico,codUsuario) VALUES(?,?,?)");

            $stmt->bindvalue(1, $avaliacao->getQuantAvaliacao());
            $stmt->bindvalue(2, $avaliacao->getPrestadorServico()->getcodPrestadorServico());
            $stmt->bindvalue(3, $avaliacao->getUsuario()->getCodUsuario());
            $stmt->execute();
                                                                               
        }

    
        //Listar
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT quantAvaliacao,nomePrestadorServico, nomeUsuario 
                            FROM tbavaliacao
                            INNER JOIN tbusuario ON tbusuario.codUsuario = tbavaliacao.codUsuario
                            INNER JOIN tbprestadorservico ON tbprestadorservico.codPrestadorServico = tbavaliacao.codPrestadorServico";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        

     ///Listar Comentário
        public function listarComentario($codAvaliacao) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codAvaliacao, quantAvaliacao,codPrestadorServico, codUsuario 
                            FROM tbavaliacao WHERE codAvaliacao = $codAvaliacao";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

      

    }
     
?>