

// function verifique()
// {
//     if (document.getElementById("LimpezaPadrao").checked){
//         alert('LimpezaPadrao');
//     }
//     if (document.getElementById("LimpezaPesada").checked){
//         alert('LimpezaPesada');
//         var btn = document.createElement("BUTTON");   // Create a <button> element
//         btn.innerHTML = "CLICK ME";                   // Insert text
//         document.body.appendChild(btn);  
//     }
//     if (document.getElementById("PassarRoupa").checked){
//         alert('PassarRoupa');
//     }
// }

// document.getElementById("form01").addEventListener('click', verifique);


/* AjusteHoras */
$("#AjusteHorasDec").click(function(){
    var AjusteHorasDec = document.getElementById('AjusteHoras');

    if(AjusteHorasDec.value >= 1)
    {
        AjusteHorasDec.value--;
    }
        
    
});
$("#AjusteHorasPlus").click(function(){
    var AjusteHorasPlus = document.getElementById('AjusteHoras');
    

    AjusteHorasPlus.value++;

    
});
/* Fim AjusteHoras */

/* Studio */
$("#QuartoDec").click(function(){
    var QuartoDec = document.getElementById('QuartoQntd');

    if(QuartoDec.value >= 1)
    {
        QuartoDec.value--;
    }
    if(QuartoDec.value < 1)
    {
        $('#QuartoQntd_desc').html('Quarto');
    }
    
    
});
$("#QuartoPlus").click(function(){
    var QuartoPlus = document.getElementById('QuartoQntd');
    

    ++QuartoPlus.value;    
});

/* input banheiro */
$("#BanheiroDec").click(function(){
    var BanheiroDec = document.getElementById('BanheiroQntd');

    if(BanheiroDec.value >= 1)
    {
        BanheiroDec.value--;
    }
    if(BanheiroDec.value < 1)
    {
        $('#BanheiroQntd_desc').html('Banheiro');
    }
    
    
    
});
$("#BanheiroPlus").click(function(){
    var BanheiroPlus = document.getElementById('BanheiroQntd');

    BanheiroPlus.value++;
});
/* fim Studio */

function request01()
{
    var auto_refresh = setTimeout(
        function () {
            document.getElementById('request01').submit();
        }, 1000);
}


function updateDiv()
{ 
    $( "#PrecoTotalbrl" ).load(window.location.href + " #PrecoTotalbrl" );
}





function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}

var auto_refresh = setInterval(
    function () {


        var QuartoPlus = document.getElementById('QuartoQntd');
        var BanheiroPlus = document.getElementById('BanheiroQntd');



        $('#PrecoTotalbrl').load(' #PrecoTotalbrl');

    

        
    
        if(QuartoPlus.value > 1)
        {
            $('#QuartoQntd_desc').html('Quartos');
        }

        if(BanheiroPlus.value > 1)
        {
            $('#BanheiroQntd_desc').html('Banheiros');
        }
    }, 1000);


$("#close-area01").click(function(){
    $("#area01").toggle(300);
    if($("#close-area01").html() == "_")
    {
        $("#close-area01").html('O');
    }else{
        $("#close-area01").html('_');
    }
});
