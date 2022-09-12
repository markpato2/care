<?php
require_once("../model/Banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getNotas();

        if(isset($row)){
            foreach ($row as $value){
                echo "<tr>";
                echo "<th>".$value['numeroNota'] ."</th>";
                echo "<td>".$value['data'] ."</td>";
                echo "<td>".$value['destinatario'] ."</td>";
                echo "<td>".$value['cpf'] ."</td>";
                echo "<td>".$value['cep']."</td>";
                echo "<td>".$value['uf']."</td>";
                echo "<td>".$value['endereco']."</td>";
                echo "<td> R$".$value['valor'] ."</td>";
                echo "<td><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['numeroNota']."'>Excluir</a></td>";
                echo "</tr>";
            }

        }


    }
}

