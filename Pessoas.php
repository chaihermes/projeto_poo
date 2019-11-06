<?php 

class Pessoas { //criando uma classe, deve ter o mesmo nome do arquivo. Cada arquivo só pode ter uma classe.
    public $nome;          //criando variáveis para armazenar as informações das características da classe.
    private $idade;         // add a visibilidade de cada característica da classe (public, private e protected)
    protected $cpf;
    public $email;

    //método acessor:
    public function setIdade($idade){
        $this->idade = $idade;     //this: esse atributo vai receber essa variável. Assim pode manipular as informações. Vai alterar o parâmetro. this é para avisar que a idade, atributo da própria classe, será alterado pelo parâmetro $idade.
    }

    //acessa a idade e apenas retorna a informação.
    //só consegue fazer qualquer ação, por meio da prórpia classe, pois a informação é privada.
    public function getIdade(){
        return $this->idade;
    }

    // a function é o método da classe Pessoas, também é possível colocar a visibilidade.
    public function falar(){           
        echo "Olá!";
    }
}