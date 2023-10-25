<?php
       require_once("../model/Conexao.php");
    class Usuario{

        private $codUsuario;
        private $nomeUsuario;
        private $cpfUsuario;
        private $logradouroUsuario;
        private $complementoUsuario;
        private $cepUsuario;
        private $bairroUsuario;
        private $cidadeUsuario;
        private $emailUsuario;
        private $senhaUsuario;
        private $imagemUsuario;
        private $dataNascUsuario;
        private $sexoUsuario;
        private $uf; //NOVO

        //Getters
        public function getCodUsuario(){
            return $this->codUsuario;
        }
        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }
        public function getCpfUsuario(){
            return $this->cpfUsuario;
        }
        public function getLogradouroUsuario(){
            return $this->logradouroUsuario;
        }
        public function getComplementoUsuario(){
            return $this->complementoUsuario;
        }
        public function getCepUsuario(){
            return $this->cepUsuario;
        }
        public function getBairroUsuario(){
            return $this->bairroUsuario;
        }
        public function getCidadeUsuario(){
            return $this->cidadeUsuario;
        }
        public function getEmailUsuario(){
            return $this->emailUsuario;
        }
        public function getSenhaUsuario(){
            return $this->senhaUsuario;
        }
        public function getImagemUsuario(){
            return $this->imagemUsuario;
        }
        public function getDataNascUsuario(){
            return $this->dataNascUsuario;
        }
        public function getSexoUsuario(){
            return $this->sexoUsuario;
        }
        public function getUf(){ //NOVO
            return $this->uf;
        }



        //Setters
        public function setCodUsuario($codUsuario){
            $this->codUsuario = $codUsuario;
        }
        public function setNomeUsuario($nomeUsuario){
            $this->nomeUsuario = $nomeUsuario;
        }
        public function setCpfUsuario($cpfUsuario){
            $this->cpfUsuario = $cpfUsuario;
        }
        public function setLogradouroUsuario($logradouroUsuario){
            $this->logradouroUsuario = $logradouroUsuario;
        }
        public function setComplementoUsuario($complementoUsuario){
            $this->complementoUsuario = $complementoUsuario;
        }
        public function setCepUsuario($cepUsuario){
            $this->cepUsuario = $cepUsuario;
        }
        public function setBairroUsuario($bairroUsuario){
            $this->bairroUsuario = $bairroUsuario;
        }
        public function setCidadeUsuario($cidadeUsuario){
            $this->cidadeUsuario = $cidadeUsuario;
        }
        public function setEmailUsuario($emailUsuario){
            $this->emailUsuario = $emailUsuario;
        }
        public function setSenhaUsuario($senhaUsuario){
            $this->senhaUsuario = $senhaUsuario;
        }
        public function setImagemUsuario($imagemUsuario){
            $this->imagemUsuario = $imagemUsuario;
        }
        public function setDataNascUsuario($dataNascUsuario){
            $this->dataNascUsuario= $dataNascUsuario;
        }
        public function setSexoUsuario($sexoUsuario){
            $this->sexoUsuario= $sexoUsuario;
        }
        public function setUf($uf){ //NOVO
            $this->uf = $uf;
        }
       
        //Cadastrar
        public function cadastrar ($usuario){

            $_SESSION['email'] = $usuario->getEmailUsuario();

            $_SESSION['senha'] = $usuario->getSenhaUsuario();

            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbusuario(nomeUsuario,dataNascUsuario,
            sexoUsuario,cpfUsuario,emailUsuario,senhaUsuario,imagemUsuario,logradouroUsuario,complementoUsuario,
            cepUsuario,bairroUsuario,cidadeUsuario,uf
            ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
           
            $stmt->bindvalue(1, $usuario->getNomeUsuario());
            $stmt->bindvalue(2, $usuario->getDataNascUsuario());
            $stmt->bindvalue(3, $usuario->getSexoUsuario());
            $stmt->bindvalue(4, $usuario->getCpfUsuario());
            $stmt->bindvalue(5, $usuario->getEmailUsuario());
            $stmt->bindvalue(6, $usuario->getSenhaUsuario());
            $stmt->bindvalue(7, $usuario->getImagemUsuario());
            $stmt->bindValue(8, $usuario->getLogradouroUsuario());
            $stmt->bindValue(9, $usuario->getComplementoUsuario());
            $stmt->bindValue(10, $usuario->getCepUsuario());
            $stmt->bindvalue(11, $usuario->getBairroUsuario());
            $stmt->bindvalue(12, $usuario->getCidadeUsuario());
            $stmt->bindValue(13, $usuario->getUf()); //NOVO
            
            $stmt->execute();
                                                                               
        }

        //Listar
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codUsuario,nomeUsuario,cpfUsuario,logradouroUsuario,complementoUsuario,cepUsuario,
                            bairroUsuario,cidadeUsuario,emailUsuario,senhaUsuario,imagemUsuario,dataNascUsuario,sexoUsuario,uf 
                            FROM tbusuario";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        //LISTAR ESPECÍFICO 
        public function listarEspecifico($emailUsuario) { //tentar com outro tipo de select 
            $conexao = Conexao::conectar();
            $querySelect = "SELECT codUsuario FROM tbusuario
            WHERE emailUsuario LIKE '$emailUsuario'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        //Deletar
        public function deletar($codUsuario) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbusuario WHERE codUsuario = $codUsuario";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

        //Listar Usuário
        public function listarUsuario($codUsuario) {
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            codUsuario,nomeUsuario,dataNascUsuario,sexoUsuario,cpfUsuario,emailUsuario,
                            senhaUsuario,imagemUsuario,logradouroUsuario,complementoUsuario,cepUsuario,bairroUsuario,cidadeUsuario,uf 
                            FROM tbusuario WHERE codUsuario = $codUsuario";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        //Alterar
        public function alterar($codUsuario, $nomeUsuario, $dataNascUsuario,$sexoUsuario,
         $cpfUsuario, $emailUsuario, $senhaUsuario, $imagemUsuario, $logradouroUsuario, $complementoUsuario, $cepUsuario,
        $bairroUsuario, $cidadeUsuario, $uf)
        {
            $conexao = Conexao::conectar();   
            $stmt = $conexao->prepare("UPDATE tbusuario
            SET nomeUsuario = ?, dataNascUsuario = ?, sexoUsuario = ?, cpfUsuario = ?, emailUsuario = ?, 
                senhaUsuario = ?, imagemUsuario = ?, logradouroUsuario = ?, complementoUsuario = ?, cepUsuario = ?,
                bairroUsuario = ?, cidadeUsuario = ?, uf = ? WHERE codUsuario = ?");

            $stmt->bindParam(1, $nomeUsuario);
            $stmt->bindParam(2, $dataNascUsuario);    
            $stmt->bindParam(3, $sexoUsuario);
            $stmt->bindParam(4, $cpfUsuario);
            $stmt->bindParam(5, $emailUsuario);  
            $stmt->bindParam(6, $senhaUsuario);
            $stmt->bindParam(7, $imagemUsuario);
            $stmt->bindParam(8, $logradouroUsuario);  
            $stmt->bindParam(9, $complementoUsuario);
            $stmt->bindParam(10, $cepUsuario);
            $stmt->bindParam(11, $bairroUsuario);  
            $stmt->bindParam(12, $cidadeUsuario);
            $stmt->bindParam(13, $uf); //NOVO
            $stmt->bindParam(14, $codUsuario); 
        
            $stmt->execute();

        }


        //FUNÇÃO PARA SISTEMA DE BUSCA 
    public function pesquisaUsuario($nomeUsuario) {

        $conexao = Conexao::conectar();

        $querySelect= "SELECT  codUsuario,nomeUsuario,dataNascUsuario,sexoUsuario,cpfUsuario,emailUsuario,senhaUsuario,

                                imagemUsuario,logradouroUsuario,complementoUsuario,cepUsuario,bairroUsuario,cidadeUsuario, uf

                                FROM tbusuario WHERE nomeUsuario LIKE '%$nomeUsuario%'";

        $resultado = $conexao->query($querySelect);

        $lista = $resultado->fetchAll();

        return $lista;

    }

    //CONSULTA ENTRAR 
    public function getUsuario($id) {
        $conexao = Conexao::conectar();
        $querySelect=
            "SELECT 
                tbusuario.codUsuario,nomeUsuario,dataNascUsuario,sexoUsuario,cpfUsuario,emailUsuario,senhaUsuario,imagemUsuario,

                logradouroUsuario,complementoUsuario,cepUsuario,bairroUsuario,cidadeUsuario,uf  FROM tbusuario

            INNER JOIN tbtelefoneusuario ON tbtelefoneusuario.codUsuario = tbusuario.codUsuario  WHERE tbusuario.codUsuario = $id AND tbusuario <> 0";

        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetch();
        return $lista;
    }
    

}

     
?>