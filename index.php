<?php
    include "Pessoas.php"; //incluindo o arquivo aqui para criar outras pessoas.
    include "Funcionarios.php";  //incluindo o arquivo da classe FUncionarios.

    $pessoaUm = new Pessoas();      //criando uma nova pessoa, (objetos).
    $pessoaUm->nome = "Chaiana";        //atribuindo um nome para o objeto.
    $pessoaUm->setIdade(33);              //atribuindo uma idade para o objeto (private). Deu erro. Quando o atributo é privado, apenas a variável pode acessar essa informação. Somente preenchendo a informação ele não deixa.
    //métodos acessores, permitem alterar o atributo. Em geral, sempre serão públicos, para que possamos manipular. Se colocar private, ele não deixa realizar a operação.
    //com o setIdade é possível alterar a idade.
    //var_dump($pessoaUm);
    echo "<h3>".$pessoaUm->nome."<h3>"; //esse imprime deboas
    //echo "<h1>".$pessoaUm->idade."<h1>";  //esse dá erro, pois a informação é privada.
    echo "<h3>".$pessoaUm->getIdade()."<h3>"; 

    //set -> é pra alterar informações. Setar novas informações.
    //get -> pega as informações.
?>
<hr>


<?php
    //criando nova pessoa.
    $pessoaDois = new Pessoas();
    $pessoaDois->nome = "Pavlos";
    var_dump($pessoaDois);
?>
<hr>

<?php
    //criando um novo funcionario. Esse novo objeto herda as características da classe Pessoas.
    $funcionarioUm = new Funcionarios();
    $funcionarioUm->nome = "Manu"; //atribuindo o nome no objeto da nova classe. Pela herança a informação é aceita, pois é público.
    $funcionarioUm->setIdade(29);   //aqui é possível setar a idade, mesmo sendo privada e de outra classe mãe.
    var_dump($funcionarioUm);
