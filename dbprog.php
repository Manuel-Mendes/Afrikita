<?php


  class conn{

     private $con;

     public function __construct(){
                

            $this->con=new PDO("mysql:dbname=rositanetdb;host=localhost:3306","root","");

           
 


     }//fim




     //metodo inseriri usuario

  public function registrar($pnome,$snome,$onome, $email,$senha,$data,$sexo,$contacto,$tipoC,$pais){
      
      $cmd=$this->con->prepare("INSERT INTO usuaria (p_nome,s_nome,o_nome,email_de_acesso, senha_de_acesso, data_de_nascimento,sexo,contacto,tipo_de_conta, pais)VALUES(:pnome,:snome,:onome,:email,:senha,:data,:sexo, :contacto,:tipoC,:pais)");

        try{

      $cmd->bindValue(':pnome',$pnome);
      $cmd->bindValue(':snome',$snome);
      $cmd->bindValue(':onome',$onome);
      $cmd->bindValue(':email',$email);
      $cmd->bindValue(':senha',$senha);
      $cmd->bindValue(':data',$data);
      $cmd->bindValue(':sexo',$sexo);
      $cmd->bindValue(':contacto',$contacto);
      $cmd->bindValue(':tipoC',$tipoC);
      $cmd->bindValue(':pais',$pais);
      $cmd->execute();

        }
        catch(PDOException $msg)
        {
                   
                   echo "".$msg->getMessage();

        }
      
  }// Fim registrar

  

  public function postar($titulo, $conteudo,$caminho){
           
           $cmd=$this->con->prepare("INSERT INTO post(titulo,conteudo,foto_caminho) VALUES (:titulo,:conteudo,:caminho)");

           $cmd->bindValue(':titulo',$titulo);
           $cmd->bindValue(':conteudo',$conteudo);
           $cmd->bindValue(':caminho',$caminho);
           $cmd->execute();


   }//fim




    public function buscarPost(){

          $cmd=$this->con->query("SELECT *FROM post ORDER BY RAND() LIMIT 3");

          $dados=$cmd->fetch(PDO::FETCH_ASSOC);
             

             foreach ($dados as $key => $value) {
               
                    
             }
          
               return $dados;


   }
   //fim buscar pos




   public function validarDados($email,$senha){

           try{

            $cmd=$this->con->query("SELECT *FROM usuaria WHERE email_de_acesso='$email' and senha_de_acesso='$senha'");

           $nome=$cmd->fetch(PDO::FETCH_ASSOC);
             


           return $nome;


           }
           catch(PDOException $e){

            echo"".$e->getMessage();


           }









   }






 public function randUsuaria(){
            
              
              try {

                 $cmd=$this->con->query("SELECT *FROM usuaria ORDER BY RAND() LIMIT 1");

            $dadosRecolhidos=$cmd->fetch(PDO::FETCH_ASSOC);

               return $dadosRecolhidos;

                
              } catch (Exception $e) {

                echo"".$e->getMessage();
                
              }

           }












  }//fim class
?>