<?php

$servico = $_GET["servico"];
$limpezaPesada = isset ($_GET["limpezaPesada"])?$_GET["limpezaPesada"]:"[não informado]";
$lar =  isset ($_GET["lar"])?$_GET["lar"]:"[não informado]";        
$banheiros = isset ($_GET["banheiros"])?$_GET["banheiros"]:"[não informado]";  
$quartos = isset ($_GET["quartos"])?$_GET["quartos"]:"[não informado]";  
$email = isset ($_GET["email"])?$_GET["email"]:"[não informado]";  
$cpf = isset ($_GET["cpf"])?$_GET["cpf"]:"[não informado]";  
$data = isset ($_GET["data"])?$_GET["data"]:"[não informado]";  
$qtd_horas = isset ($_GET["qtd_horas"])?$_GET["qtd_horas"]:"[não informado]";  
$horario = isset ($_GET["horario"])?$_GET["horario"]:"[não informado]";  
$nome =  isset ($_GET["nome"])?$_GET["nome"]:"[não informado]";  
$complemento =  isset ($_GET["complemento"])?$_GET["complemento"]:"[não informado]";  







if ($servico == "Limpeza Pesada") {
      
   if  (empty($limpezaPesada.$lar.$quartos.$banheiros)) {
  
    echo "algum campo esta vazio";

   }else{
    echo "Tipo de Serviço :  $servico <br>";
    echo "Tipo de limpeza pesada : $limpezaPesada<br>";
    echo "Local :$lar <br>";
    echo "Quartos :$quartos<br> ";
    echo "Banheiros :$banheiros <br>";
    echo "Email :$email <br>";
    echo "CPF :$cpf <br>";
    echo "Data :$data <br>";
    echo "Quantidade de horas :$qtd_horas <br>";
    echo "Horario :$horario <br>";
    echo "Nome :$nome <br>";
    echo "Complemento :$complemento <br>";


   }


}else if  ($servico == "Passar Roupa"){

    

    echo "Tipo :de Serviço :  $servico <br>";
    echo "Local :$lar <br>";
    echo "Email :$email <br>";
    echo "CPF :$cpf <br>";
    echo "Data :$data <br>";
    echo "Quantidade de horas :$qtd_horas <br>";
    echo "Horario :$horario <br>";
    echo "Nome :$nome <br>";
    echo "Complemento :$complemento <br>";


}else if ($servico == "Limpeza Padrão"){


    echo "Tipo :de Serviço :  $servico <br>";
    echo "Local :$lar <br>";
    echo "Quartos :$quartos<br> ";
    echo "Banheiros :$banheiros <br>";
    echo "Email :$email <br>";
    echo "CPF :$cpf <br>";
    echo "Data :$data <br>";
    echo "Quantidade de horas :$qtd_horas <br>";
    echo "Horario :$horario <br>";
    echo "Nome :$nome <br>";
    echo "Complemento :$complemento <br>";


}else if ($servico == "Limpeza Pós Obra"){


    echo "Tipo :de Serviço :  $servico <br>";
    echo "Local :$lar <br>";
    echo "Quartos :$quartos<br> ";
    echo "Banheiros :$banheiros <br>";
    echo "Email :$email <br>";
    echo "CPF :$cpf <br>";
    echo "Data :$data <br>";
    echo "Quantidade de horas :$qtd_horas <br>";
    echo "Horario :$horario <br>";
    echo "Nome :$nome <br>";
    echo "Complemento :$complemento <br>";


}else {

    echo "<br>Campo nome obrigatorio";
    $_SESSION['servico'] = "Campo Serviço obrigatorio";
    header("Location: casa.html");
}



?>