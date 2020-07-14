<?php 


if(isset($_POST['step2'])): ?>

<hr>

<h3>Qual a frequência das diárias</h3>

<input type="radio" name="frequencia" id="unica" >
<label for="unica">Diária Única</label>

<input type="radio" name="frequencia" id="semanal" >
<label for="semanal">Toda Semana</label>

<input type="radio" name="frequencia" id="quinzenal" >
<label for="quinzenal">Toda Quinzena</label>

<h3>Dia da semana</h3>

<input type="date" name="datas" id="datas">

<h3>Horário</h3>


<input type="radio" name="horario" id="08-11">
<label for="08-11">08:00 - 11:00</label>
<input type="radio" name="horario" id="09-12">
<label for="09-12">09:00 - 12:00</label>
<input type="radio" name="horario" id="13-16">
<label for="13-16">13:00 - 16:00</label>
<input type="radio" name="horario" id="14-17">
<label for="14-17">14:00 - 17:00</label>
<input type="radio" name="horario" id="15-18">
<label for="15-18">15:00 - 18:00</label>


<br><br>

<hr class="mb-4">
  <button class="btn btn-primary btn-lg btn-block" name="finaliza" type="submit">Prosseguir</button>

<?php endif;?>