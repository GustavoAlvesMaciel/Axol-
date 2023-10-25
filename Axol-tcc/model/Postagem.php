<?php
       require_once("../model/Conexao.php");
       require_once("../model/PrestadorServico.php"); //FK

    class Postagem{
        private $codPostagem;

        private $descricaoPostagem;
        private $imgPostagem;
        private $dataPostagem;
        private $tituloPostagem;
        private $codPrestadorServico; //FK
        private $prestadorServico; //FK
 

        //Getters
        public function getCodPostagem(){
            return $this->codPostagem;
        }
        
        public function getDescricaoPostagem(){
            return $this->descricaoPostagem;
        }
        public function getImgPostagem(){
            return $this->imgPostagem;
        }
        public function getDataPostagem(){
            return $this->dataPostagem;
        }
        public function getTituloPostagem(){
            return $this->tituloPostagem;
        }
        public function getCodPrestadorServico(){ //Para FK
            return $this->codPrestadorServico;
        }
        public function getPrestadorServico(){ //Para FK
            return $this->prestadorServico;
        }

        //Setters
        public function setCodPostagem($codPostagem){
            $this->codPostagem = $codPostagem;
        }

        public function setDescricaoPostagem($descricaoPostagem){
            $this->descricaoPostagem = $descricaoPostagem;
        }
        public function setImgPostagem($imgPostagem){
            $this->imgPostagem = $imgPostagem;
        }
        public function setDataPostagem($dataPostagem){
            $this->dataPostagem = $dataPostagem;
        }
        public function setTituloPostagem($tituloPostagem){
            $this->tituloPostagem = $tituloPostagem;
        }
        public function setCodPrestadorServico($codPrestadorServico){ //FK
            $this->codPrestadorServico = $codPrestadorServico;
        }
        public function setPrestadorServico($prestadorServico){ //FK
            $this->prestadorServico = $prestadorServico;
        }
       

       //Cadastrar
        public function cadastrar ($postagem){

            $_SESSION['codigo'] = $postagem->getCodPostagem();
            
            $_SESSION['descricao'] = $postagem->getDescricaoPostagem();//--
            $_SESSION['img'] = $postagem->getImgPostagem();//--
            $_SESSION['data'] = $postagem->getDataPostagem();//--
            $_SESSION['titulo'] = $postagem->getTituloPostagem();//--

            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbpostagem(codPostagem,descricaoPostagem,imgPostagem,dataPostagem,tituloPostagem,codPrestadorServico) VALUES(?,?,?,?,?,?)");
     
            $stmt->bindvalue(1, $postagem->getCodPostagem());
            $stmt->bindvalue(2, $postagem->getDescricaoPostagem());
            $stmt->bindvalue(3, $postagem->getImgPostagem());
            $stmt->bindvalue(4, $postagem->getDataPostagem());
            $stmt->bindvalue(5, $postagem->getTituloPostagem());
            $stmt->bindvalue(6, $postagem->getPrestadorServico()); //FK
            $stmt->execute();
                                                                               
        }

        //Listar
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codPostagem,descricaoPostagem,imgPostagem,dataPostagem,tituloPostagem,nomePrestadorServico
                            FROM tbpostagem
                            INNER JOIN tbprestadorservico ON tbprestadorservico.codPrestadorServico = tbpostagem.codPrestadorServico";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        //LISTAR ESPECÍFICO 
        public function listarEspecifico($descricaoPostagem) { //tentar com outro tipo de select 
            $conexao = Conexao::conectar();
            $querySelect = "SELECT codPostagem FROM tbpostagem
            WHERE descricaoPostagem LIKE '$descricaoPostagem'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

         //Listar Postagem
         public function listarPostagem($codPostagem) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codPostagem, descricaoPostagem, imgPostagem, dataPostagem, tituloPostagem, codPrestadorServico
                            FROM tbpostagem WHERE codPostagem = $codPostagem";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        //Deletar
        public function deletar($codPostagem) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbpostagem WHERE codPostagem = $codPostagem";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

        //DELETAR TUDO POSTAGEM
        public function deletarPrestador($codPrestadorServico){ //FK 'codPrestadorServico' na tbPostagem
            $conexao = Conexao::conectar();
            $querySelect = "DELETE tbprestadorservico, tbpostagem FROM tbprestadorservico
            INNER JOIN tbpostagem ON tbpostagem.codPrestadorServico = tbprestadorservico.codPrestadorServico
            WHERE codPrestadorServico = $codPrestadorServico";

            $resultado = $conexao->query($querySelect);
            return $resultado;
        }


          

        //Alterar
        public function alterar($codPostagem, $descricaoPostagem, $imgPostagem, $dataPostagem, $tituloPostagem, $codPrestadorServico)
        {
            $_SESSION['descricao'] = $dataPostagem();//--
            $_SESSION['img'] = $tituloPostagem();//--
            $_SESSION['data'] = $codPrestadorServico();//--
            $_SESSION['titulo'] = $codPostagem();
            $conexao = Conexao::conectar();   
            $stmt = $conexao->prepare("UPDATE tbpostagem
            SET descricaoPostagem = ?, imgPostagem = ?, dataPostagem = ?, tituloPostagem = ?, codPrestadorServico = ?  WHERE codPostagem = ?");

            $stmt->bindParam(1, $descricaoPostagem);//Na mesma ordem do UPDATE
            $stmt->bindParam(2, $imgPostagem);
            $stmt->bindParam(3, $dataPostagem);
            $stmt->bindParam(4, $tituloPostagem);
            $stmt->bindParam(5, $codPrestadorServico);  //FK 
            $stmt->bindParam(6, $codPostagem);           

            $stmt->execute();

        }
    
        //FUNÇÃO SISTEMA DE BUSCAS
        public function pesquisaPostagem($nomePrestadorServico) {
            $conexao = Conexao::conectar();
            $querySelect= "SELECT codPostagem,descricaoPostagem,imgPostagem,dataPostagem,tituloPostagem,nomePrestadorServico
                                    FROM tbpostagem INNER JOIN tbprestadorservico
                                     ON tbprestadorservico.codPrestadorServico = tbpostagem.codPrestadorServico
                                    WHERE nomePrestadorServico LIKE '$nomePrestadorServico'";

            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }
?>