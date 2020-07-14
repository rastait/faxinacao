


<?php 
if(isset($_POST['emailAgendamento']) AND isset($_POST['cepAgendamento']) AND isset($_POST['QuartoQntd']) AND isset($_POST['BanheiroQntd']) AND $_POST['BanheiroQntd'] != ''  AND $_POST['QuartoQntd'] != '' AND $_POST['cepAgendamento'] != '' AND $_POST['emailAgendamento'] != ''):
    
    
    $_SESSION['precoTotal'] =  ($hora * (isset($_POST['AjusteHoras'])?$_POST['AjusteHoras']:0)) + ($_POST['QuartoQntd'] * $quarto) + ($_POST['BanheiroQntd'] * $banheiro );
    
endif;

    if(isset($alt) AND $alt == "PassarRoupa" AND isset($_POST['AjusteHoras']) AND $_POST['AjusteHoras'] > 0)
    {
        $_SESSION['precoTotal'] =  $hora * $_POST['AjusteHoras'];
        echo '<input type="submit" name="step2" value="Seguinte">';
    }

if($alt != "LimpezaPesada"):
    if($alt != "PassarRoupa"):
        if(isset($_POST['emailAgendamento']) AND isset($_POST['cepAgendamento']) AND isset($_POST['QuartoQntd']) AND isset($_POST['BanheiroQntd']) AND $_POST['BanheiroQntd'] != ''  AND $_POST['QuartoQntd'] != '' AND $_POST['cepAgendamento'] != '' AND $_POST['emailAgendamento'] != ''):
?>


<h3>Ajuste de horas</h3>


<a href="javascript:unset(0);" id="AjusteHorasDec" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">-</a>
<input type="text" name="AjusteHoras" id="AjusteHoras" value="<?php if(isset($_POST['AjusteHoras'])){echo $_POST['AjusteHoras'];} ?>">    
<a href="javascript:unset(0);" id="AjusteHorasPlus" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">   +</a>

<h3>Itens Opcionais</h3>
<h5>Personalize sua diária com itens opcionais.</h5>

<input type="checkbox" name="InteriorGeladeira" id="InteriorGeladeira" <?php echo isset($_POST['InteriorGeladeira'])?' checked':'';?>>
<label for="InteriorGeladeira">Interior da geladeira</label>

<input type="checkbox" name="InteriorArmarioCozinha" id="InteriorArmarioCozinha" <?php echo isset($_POST['InteriorArmarioCozinha'])?' checked':'';?>>
<label for="InteriorArmarioCozinha">Interior de armário de cozinha</label>

<input type="checkbox" name="AreaExterna" id="AreaExterna" <?php echo isset($_POST['AreaExterna'])?' checked':'';?>>
<label for="AreaExterna"> Área Externa (até 20m<sup>2</sup>)</label>

<input type="checkbox" name="InteriorJanelas" id="InteriorJanelas" <?php echo isset($_POST['InteriorJanelas'])?' checked':'';?>>
<label for="InteriorJanelas" >Interior de Janelas</label>

<input type="checkbox" name="AspirarTapeteEstofado" id="AspirarTapeteEstofado" <?php echo isset($_POST['AspirarTapeteEstofado'])?' checked':'';?>>
<label for="AspirarTapeteEstofado">Aspirar Tapete ou Estofado</label>

<br><br>

<input type="submit" name='step2' value="Seguinte">

        <?php endif;?>
    <?php endif;?>
<?php endif;?>
<?php 

if(isset($alt) AND $alt == "LimpezaPesada"):
    if(isset($_POST['emailAgendamento']) AND isset($_POST['cepAgendamento']) AND isset($_POST['QuartoQntd']) AND isset($_POST['BanheiroQntd']) AND $_POST['BanheiroQntd'] != ''  AND $_POST['QuartoQntd'] != '' AND $_POST['cepAgendamento'] != '' AND $_POST['emailAgendamento'] != ''):

?>


<h3>Ajuste de horas</h3>


<a href="javascript:unset(0);" id="AjusteHorasDec" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">-</a>
<input type="text" name="AjusteHoras" id="AjusteHoras" value="<?php if(isset($_POST['AjusteHoras'])){echo $_POST['AjusteHoras'];} ?>">    
<a href="javascript:unset(0);" id="AjusteHorasPlus" onclick="request01()" class="btn btn btn-outline-primaryRound btn-lg">   +</a>
<br><br>

<input type="submit" name='step2' value="Seguinte">

    <?php endif; ?>
<?php endif; ?>

<br><br>




<?php require('step3.php'); ?>





