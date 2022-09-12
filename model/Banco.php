<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setXml($numeroNota,$data,$destinatario,$valor,$cpf,$endereco,$cep,$uf){
        $stmt = $this->mysqli->prepare("INSERT INTO notas (`numeroNota`, `data`, `destinatario`, `valor`, `cpf`, `endereco`, `cep`, `uf`) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss",$numeroNota,$data,$destinatario,$valor,$cpf,$endereco,$cep,$uf);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getNotas(){
        $result = $this->mysqli->query("SELECT * FROM notas");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        if(isset($array)){
            return $array;
        }


    }

    public function deleteNota($id){
        if($this->mysqli->query("DELETE FROM `notas` WHERE `numeroNota` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function pesquisaNota($id){

        $result = $this->mysqli->query("SELECT * FROM notas WHERE numeroNota='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
}
?>
