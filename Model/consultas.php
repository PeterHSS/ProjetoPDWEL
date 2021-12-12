<?php
require_once "conexao.php";

class Consultas
{
    public function validacaoUser($usuario, $senha){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT * FROM usuario where senha = '$senha' and email = '$usuario';";     

        

        $sql = $conMySQL->prepare($stringSQL);
        $sql->execute();
		
		
		return count($sql->fetchAll());
    }
    
    public function validacaoAdm($usuario, $senha){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT * FROM adm where senha = '$senha' and email = '$usuario';";     

        

        $sql = $conMySQL->prepare($stringSQL);
        $sql->execute();
		
		
		return count($sql->fetchAll());
    }
    
    public function inserirUser($cpf, $email,$senha){
        if ($this) {
            $conMySQL = DB::conexao();

            $stringSQL = "INSERT INTO  usuario
                          VALUES ('', :cpfUser,:emailUser, :senhaUser);";
            $sql = $conMySQL->prepare($stringSQL);
            //$sql->bindValue(":codigo", $this->getCodigo());
            $sql->bindValue(":cpfUser", $cpf);
            $sql->bindValue(":emailUser", $email);
            $sql->bindValue(":senhaUser", $senha);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
    }
    
    public function alterarUser($cpf, $email,$senha){
        if ($this) {
            $conMySQL = DB::conexao();

            $stringSQL = "update usuario
                          set email= :email, senha=:senha where cpf=:cpf;";
            $sql = $conMySQL->prepare($stringSQL);
            //$sql->bindValue(":codigo", $this->getCodigo());
            $sql->bindValue(":cpf", $cpf);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", $senha);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
    }
    public function adicionarCarrinho($email, $produto,$quantidade, $valor,$situacao){
        if ($this) {
            $conMySQL = DB::conexao();

            $stringSQL = "INSERT INTO  carrinho
                          VALUES (:email_usuario,:nomeProduto, :quantidade, :valor,:situacao);";
            $sql = $conMySQL->prepare($stringSQL);
            //$sql->bindValue(":codigo", $this->getCodigo());
            $sql->bindValue(":email_usuario", $email);
            $sql->bindValue(":nomeProduto", $produto);
            $sql->bindValue(":quantidade", $quantidade);
            $sql->bindValue(":valor", $valor);
            $sql->bindValue(":situacao", $situacao);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
    }
    
    public function listarProdutos($email){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT nomeProduto,quantidade,valor,situacao FROM carrinho where situacao='aguardo' and email_usuario= :email;";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->bindValue(":email", $email);
        
        
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
    
    public function upProdutos($email){
		if ($this) {
            $conMySQL = DB::conexao();

           
         $stringSQL = "update carrinho set situacao='OK' where situacao='aguardo' and email_usuario= :email;";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->bindValue(":email", $email);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
	}
    
    
    


}