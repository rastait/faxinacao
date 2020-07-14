<?php
if(isset($alt)):
  if($alt != "PassarRoupa"):
?>
<h2>Como é seu lar?</h2>


        <button class="
        <?php 
        
        if($lar == 'Studio')
        { echo 'btn btn btn-outline-primarySelecionado btn-lg';} else 
        { echo 'btn btn btn-outline-primary btn-lg';} 
        
        ?>
        " name="lar" value="Studio"> Studio </button>
        <button href="" class="
        <?php 
        
        if($lar == 'Apartamento')
        { echo 'btn btn btn-outline-primarySelecionado btn-lg';} else 
        { echo 'btn btn btn-outline-primary btn-lg';} 
        
        ?>
        " name="lar" value="Apartamento"> Apartamento </button> 
        <button href="" class="
        <?php 
        
        if($lar == 'Casa')
        { echo 'btn btn btn-outline-primarySelecionado btn-lg';} else 
        { echo 'btn btn btn-outline-primary btn-lg';} 
        
        ?>
        " name="lar" value="Casa"> Casa </button>

        <br><br>


        <a href="javascript:unset(0);" id="QuartoDec" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">-</a>
        <input type="text" name="QuartoQntd" id="QuartoQntd" value="<?php echo isset($_POST['QuartoQntd'])?$_POST['QuartoQntd']:'';?>">
         <span id="QuartoQntd_desc" style="margin-left: -90px; padding-right: 35px">Quarto</span>  
         <a href="javascript:unset(0);" id="QuartoPlus" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">   +</a> 
         <?php 
            if(isset($_POST['QuartoQntd']) AND $_POST['QuartoQntd'] == '' AND $_POST['QuartoQntd'] < 1 ):
              
            ?>
            <br>
            <span style='color: red;'>Ao menos 1 quarto precisa ser adicionado.</span>

              
            <?php endif; ?>
            <br><br>
        <a href="javascript:unset(0);" id="BanheiroDec" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">-</a>
        <input type="text" name="BanheiroQntd" id="BanheiroQntd" value="<?php echo isset($_POST['BanheiroQntd'])?$_POST['BanheiroQntd']:'';?>">
         <span id="BanheiroQntd_desc" style="margin-left: -90px; padding-right: 35px">Banheiro</span>    
        <a href="javascript:unset(0);" id="BanheiroPlus" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">   +</a> 

        <?php 
            if(isset($_POST['BanheiroQntd']) AND $_POST['BanheiroQntd'] == '' AND $_POST['BanheiroQntd'] < 1 ):
              
            ?>
            <br>
            <span style='color: red;'>Ao menos 1 banheiro precisa ser adicionado.</span>

              
            <?php endif; ?>
            <?php elseif($alt == "PassarRoupa"): ?>

              <h3>Ajuste de horas</h3>

          <a href="javascript:unset(0);" id="AjusteHorasDec" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">-</a>
          <input type="text" name="AjusteHoras" id="AjusteHoras" value="<?php if(isset($_POST['AjusteHoras'])){echo $_POST['AjusteHoras'];} ?>">    
          <a href="javascript:unset(0);" id="AjusteHorasPlus" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">   +</a>

        <br><br>

            <?php endif;?>
            <?php endif;?>

  <h3>Um pouco sobre você</h3>

<input type="email" name="emailAgendamento" id="emailAgendamento" placeholder="email@email.com" style="
<?php 
if(isset($_POST['emailAgendamento']) AND $_POST['emailAgendamento'] == ''):
  

?>

color: red; border: 2px red solid;


<?php endif; ?>
"

value="<?php echo isset($_POST['emailAgendamento'])?$_POST['emailAgendamento']:''; ?>"

>
<?php 
if(isset($_POST['emailAgendamento']) AND $_POST['emailAgendamento'] == '' ):
  
?>
<span style='color: red;'>O campo E-mail não pode ficar vazio.</span>

  
<?php endif; ?>
<input type="text" name="cepAgendamento" id="cepAgendamento" placeholder="CEP: 00000-000" style="
<?php 
if(isset($_POST['cepAgendamento'])):
  if($_POST['cepAgendamento'] == 0 OR $_POST['cepAgendamento'] == ''):

?>

color: red; border: 2px red solid;

<?php endif; ?>
<?php endif; ?>
"
value="<?php echo isset($_POST['cepAgendamento'])?$_POST['cepAgendamento']:''; ?>"

>

<?php 
if(isset($_POST['cepAgendamento'])):
  if($_POST['cepAgendamento'] == 0 OR $_POST['cepAgendamento'] == ''):
?>
<span style='color: red;'>O campo CEP não pode ficar vazio.</span>

  <?php endif; ?>
<?php endif; ?>

<br><br>
<?php if(isset($_POST['emailAgendamento']) AND isset($_POST['cepAgendamento']) AND isset($_POST['QuartoQntd']) AND isset($_POST['BanheiroQntd']) AND $_POST['BanheiroQntd'] != ''  AND $_POST['QuartoQntd'] != '' AND $_POST['cepAgendamento'] != '' AND $_POST['emailAgendamento'] != ''): ?>


  <input type="submit" value="Atualizar Preço">
  
  <?php elseif(isset($alt) AND $alt == "PassarRoupa" AND isset($_POST['AjusteHoras']) AND $_POST['AjusteHoras'] > 0): ?>
    

  <input type="submit" value="Atualizar Preço">


  <?php else: ?>
    

  <input type="submit" value="Ver Preço">
    
  
  <?php endif;?>
