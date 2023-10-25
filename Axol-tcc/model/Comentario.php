<?php
       require_once("../model/Conexao.php");
       require_once("../model/Usuario.php"); //FK
       require_once("../model/Postagem.php"); //FK

    class Comentario{

        private $codComentario;
        private $mensagem;
       
        //GETTERS
        public function getCodComentario(){
            return $this->codComentario;
        }
        public function getMensagem(){
            return $this->mensagem;
        }
   
 
        //SETTERS
        public function setCodComentario($codComentario){
            $this->codComentario = $codComentario;
        }
        public function setMensagem($mensagem){
            $this->mensagem = $mensagem;
        }
       
        //CADASTRAR
        public function cadastrar (){
            $conexao = Conexao::conectar();
            $mensagem = $_POST['mensagem'];
            $conexao->query("INSERT INTO tbcomentario SET mensagem = '$mensagem'");
                                                                               
        }

        //Listar
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT codComentario, mensagem FROM tbcomentario";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        //Deletar
        public function deletar($codComentario) { //FUNÇÃO DELETAR table comentario
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbcomentario WHERE codComentario = $codComentario";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

      

        //Listar Comentário
        public function listarComentario($codComentario) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codComentario, mensagem
                            FROM tbcomentario WHERE codComentario = $codComentario";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

    }
?>