function clicar() {
    var num1 = document.querySelector(".num1").value;
    var num2 = document.querySelector(".num2").value;
    var resultado = parseInt(num1) + parseInt(num2);
    document.querySelector(".resultado").innerHTML = resultado;
}

function limpezaPadrao()
{
  document.getElementById('divTeste').innerHTML = 'Limpeza padrão';
}

function limpezaPesada()

{document.getElementById('divTeste').innerHTML = 'Limpeza Pesada';}

function passarRoupa()

{
    var sumirElement = document.getElementById('sumir').remove();
    var sumirElement = document.getElementById('sumir').remove();


}

function Mudarestado(el) {
    document.getElementById('divTeste').innerHTML = 'Limpeza padrão';
    var display = document.getElementById(el).style.display;
    if (display == "none")
      document.getElementById(el).style.display = 'block';
    else
      document.getElementById(el).style.display = 'none';
  }



