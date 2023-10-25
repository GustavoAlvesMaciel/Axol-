<?php
       require_once("Conexao.php");

    class PrestadorServico{

        private $codPrestadorServico;
        private $nomePrestadorServico;
        private $logradouroPrestadorServico;
        private $emailPrestadorServico;
        private $bairroPrestadorServico;
        private $cepPrestadorServico;
        private $cidadePrestadorServico;
        private $complementoPrestadorServico;
        private $senhaPrestadorServico;
        private $cnpjPrestadorServico;
        private $imgPrestadorServico;
        private $uf; //NOVO
        private $tipoServico; //NOVO
      

 /*GETTS */
        public function getCodPrestadorServico(){
            return $this->codPrestadorServico;
        }
        public function getNomePrestadorServico(){
            return $this->nomePrestadorServico;
        }
        public function getLogradouroPrestadorServico(){
            return $this->logradouroPrestadorServico;
        }
        public function getEmailPrestadorServico(){
            return $this->emailPrestadorServico;
        }
        public function getBairroPrestadorServico(){
            return $this->bairroPrestadorServico;
        }
        public function getCepPrestadorServico(){
            return $this->cepPrestadorServico;
        }
        public function getCidadePrestadorServico(){
            return $this->cidadePrestadorServico;
        }
        public function getComplementoPrestadorServico(){
            return $this->complementoPrestadorServico;
        }
        public function getSenhaPrestadorServico(){
            return $this->senhaPrestadorServico;
        }
        public function getCnpjPrestadorServico(){
            return $this->cnpjPrestadorServico;
        }
        public function getImgPrestadorServico(){
            return $this->imgPrestadorServico;
        }
        public function getUf(){ //NOVO
            return $this->uf;
        }
        public function getTipoServico(){ //NOVO
            return $this->tipoServico;
        }
   
 /*SETTERS */
        public function setCodPrestadorServico($codPrestadorServico){
            $this->codPrestadorServico = $codPrestadorServico;
        }
        public function setNomePrestadorServico($nomePrestadorServico){
            $this->nomePrestadorServico = $nomePrestadorServico;
        }
        public function setLogradouroPrestadorServico($logradouroPrestadorServico){
             $this->logradouroPrestadorServico = $logradouroPrestadorServico;
        }
        public function setEmailPrestadorServico($emailPrestadorServico){
             $this->emailPrestadorServico = $emailPrestadorServico;
        }
        public function setBairroPrestadorServico($bairroPrestadorServico){
             $this->bairroPrestadorServico = $bairroPrestadorServico;
        }
        public function setCepPrestadorServico($cepPrestadorServico){
             $this->cepPrestadorServico = $cepPrestadorServico;
        }
        public function setCidadePrestadorServico($cidadePrestadorServico){
             $this->cidadePrestadorServico = $cidadePrestadorServico;
        }
        public function setComplementoPrestadorServico($complementoPrestadorServico){
             $this->complementoPrestadorServico = $complementoPrestadorServico;
        }
        public function setSenhaPrestadorServico($senhaPrestadorServico){
             $this->senhaPrestadorServico = $senhaPrestadorServico;
        }
        public function setCnpjPrestadorServico($cnpjPrestadorServico){
             $this->cnpjPrestadorServico = $cnpjPrestadorServico;
        }
        public function setImgPrestadorServico($imgPrestadorServico){
             $this->imgPrestadorServico = $imgPrestadorServico;
        }
        public function setUf($uf){ //NOVO
            $this->uf = $uf;
       }
       public function setTipoServico($tipoServico){ //NOVO
        $this->tipoServico = $tipoServico;
   }
    
       //Cadastrar
        public function cadastrar ($prestadorServico){

    
            $_SESSION['email'] = $prestadorServico->getEmailPrestadorServico();
            $_SESSION['tipoServico'] =$prestadorServico->getTipoServico();
            $_SESSION['senha'] = $prestadorServico->getSenhaPrestadorServico();

            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbprestadorservico(nomePrestadorServico,logradouroPrestadorServico,
            emailPrestadorServico,bairroPrestadorServico,cepPrestadorServico,cidadePrestadorServico,
            complementoPrestadorServico,senhaPrestadorServico,cnpjPrestadorServico,imgPrestadorServico,tipoServico,uf
            ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bindvalue(1, $prestadorServico->getNomePrestadorServico());
            $stmt->bindvalue(2, $prestadorServico->getLogradouroPrestadorServico());
            $stmt->bindvalue(3, $prestadorServico->getEmailPrestadorServico());
            $stmt->bindvalue(4, $prestadorServico->getBairroPrestadorServico());
            $stmt->bindvalue(5, $prestadorServico->getCepPrestadorServico());
            $stmt->bindvalue(6, $prestadorServico->getCidadePrestadorServico());
            $stmt->bindvalue(7, $prestadorServico->getComplementoPrestadorServico());
            $stmt->bindvalue(8, $prestadorServico->getSenhaPrestadorServico());
            $stmt->bindvalue(9, $prestadorServico->getCnpjPrestadorServico());
            $stmt->bindvalue(10, $prestadorServico->getImgPrestadorServico());
            $stmt->bindvalue(11, $prestadorServico->getTipoServico());
            $stmt->bindvalue(12, $prestadorServico->getUf());//NOVO
            
            $stmt->execute();
                                                                               
        }

        //Listar
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                        codPrestadorServico,nomePrestadorServico
                        ,logradouroPrestadorServico,emailPrestadorServico,bairroPrestadorServico,cepPrestadorServico
                        ,cidadePrestadorServico,complementoPrestadorServico,senhaPrestadorServico	
                        ,cnpjPrestadorServico,imgPrestadorServico,uf,tipoServico FROM tbprestadorservico";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        //LISTAR ESPECÍFICO 
        
        public function listarEspecifico($emailPrestadorServico) { //tentar com outro tipo de select 
            $conexao = Conexao::conectar();
            $querySelect = "SELECT  codPrestadorServico FROM tbprestadorservico
            WHERE emailPrestadorServico LIKE '$emailPrestadorServico'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }
        
        //Deletar ACHO QUE TEM QUE FAZER UM INNER JOIN AQUI COM TODAS A TABLES 
        public function deletar($codPrestadorServico) { //FUNÇÃO PARA DELETAR ATRIBUTOS DAS TABLES
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbprestadorservico WHERE codPrestadorServico = $codPrestadorServico";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

        //Listar Prestador Servico
        public function listarPrestadorServico($codPrestadorServico) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codPrestadorServico, nomePrestadorServico, cnpjPrestadorServico, emailPrestadorServico, senhaPrestadorServico, 
                            imgPrestadorServico, logradouroPrestadorServico, complementoPrestadorServico, cepPrestadorServico,
                            bairroPrestadorServico, cidadePrestadorServico,uf,tipoServico   
                            FROM tbprestadorservico WHERE codPrestadorServico = $codPrestadorServico";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        //Alterar
        public function alterar($codPrestadorServico, $nomePrestadorServico, $cnpjPrestadorServico, $emailPrestadorServico, 
        $senhaPrestadorServico, $imgPrestadorServico, $logradouroPrestadorServico, $complementoPrestadorServico, 
        $cepPrestadorServico, $bairroPrestadorServico, $cidadePrestadorServico, $uf, $tipoServico) //FUNÇÃO PARA ALTERAR ATRIBUTOS DAS TABLES
        
        {
            $conexao = Conexao::conectar();   
            $stmt = $conexao->prepare("UPDATE tbprestadorservico
            SET nomePrestadorServico = ?, cnpjPrestadorServico = ?, emailPrestadorServico = ?,
            senhaPrestadorServico = ?, imgPrestadorServico = ?, logradouroPrestadorServico = ?,
            complementoPrestadorServico = ?, cepPrestadorServico = ?, bairroPrestadorServico = ?, 
            cidadePrestadorServico = ?, uf = ? , tipoServico = ? WHERE codPrestadorServico = ?");
         
            $stmt->bindParam(1, $nomePrestadorServico); //está em ordem(sequência tables banco)
            $stmt->bindParam(2, $cnpjPrestadorServico);
            $stmt->bindParam(3, $emailPrestadorServico);       
            $stmt->bindParam(4, $senhaPrestadorServico);
            $stmt->bindParam(5, $imgPrestadorServico);
            $stmt->bindParam(6, $logradouroPrestadorServico);  
            $stmt->bindParam(7, $complementoPrestadorServico);
            $stmt->bindParam(8, $cepPrestadorServico);
            $stmt->bindParam(9, $bairroPrestadorServico);        
            $stmt->bindParam(10, $cidadePrestadorServico);
            $stmt->bindParam(11, $uf); //NOVO
            $stmt->bindParam(12, $tipoServico); //NOVO
            $stmt->bindParam(13, $codPrestadorServico); 
        
            $stmt->execute();

        }

         //FUNÇÃO PARA SISTEMA DE BUSCA 
         public function pesquisaPrestador($nomePrestadorServico) {

            $conexao = Conexao::conectar();
    
            $querySelect= "SELECT  codPrestadorServico,nomePrestadorServico,cnpjPrestadorServico,emailPrestadorServico,senhaPrestadorServico,

            imgPrestadorServico,logradouroPrestadorServico,complementoPrestadorServico,cepPrestadorServico,bairroPrestadorServico,cidadePrestadorServico,uf,tipoServico
    
                                    FROM tbprestadorservico WHERE nomePrestadorServico LIKE '%$nomePrestadorServico%'";
    
            $resultado = $conexao->query($querySelect);
    
            $lista = $resultado->fetchAll();
    
            return $lista;
    
        }

         //FUNÇÃO PARA SISTEMA DE LOGIN
        /*public function login($emailPrestadorServico, $senhaPrestadorServico)
        {
            $conexao = Conexao::conectar();   
            $stmt = $conexao->prepare("SELECT emailPrestadorServico, senhaPrestadorServico FROM tbprestadorservico 
            WHERE emailPrestadorServico = '$emailPrestadorServico' and senhaPrestadorServico = '$senhaPrestadorServico'");
            $stmt->execute();

        }*/

    }
     
?>