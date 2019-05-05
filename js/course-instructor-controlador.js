$(document).ready(function(){
    //Se ejecuta cuando el DOM este cargado completamente
    ocultarinicio();
    //aqui deve ir el ajax de carga de materiales
    
});
function ocultarinicio(){
    $('#info2').fadeOut(1);
    $('#info3').fadeOut(1);
    $('#info4').fadeOut(1);
    $('#info5').fadeOut(1);
    $('#form-courseg').fadeOut(1);
  };
  
$('#btn-materiales').click(function poner1(){
            $('#info1').fadeIn(2);
            (quitar1())();
        });
$('#btn-updates').click(function poner2(){
            $('#info2').fadeIn(2);
            (quitar2())();
        });
$('#btn-grades').click(function poner3(){
            $('#info3').fadeIn(2);
            /*aqui falta una ventana emergente*/
            (quitar3())();
        });
$('#btn-attendance').click(function poner4(){
    $('#info4').fadeIn(2);
    /*aqui falta una ventana emergente*/
    (quitar4())();
});
$('#btn-members').click(function poner5(){
    $('#info5').fadeIn(2);
    /*aqui falta una ventana emergente*/
    (quitar5())();
});

function quitar1(){
  $('#info2').fadeOut(1);
  $('#info3').fadeOut(1);
  $('#info4').fadeOut(1);
  $('#info5').fadeOut(1);
};
  
function quitar2(){
  $('#info1').fadeOut(1);
  $('#info3').fadeOut(1);
  $('#info4').fadeOut(1);
  $('#info5').fadeOut(1);
};

function quitar3(){
  $('#info1').fadeOut(1);
  $('#info2').fadeOut(1);
  $('#info4').fadeOut(1);
  $('#info5').fadeOut(1);
};

function quitar4(){
  $('#info1').fadeOut(1);
  $('#info2').fadeOut(1);
  $('#info3').fadeOut(1);
  $('#info5').fadeOut(1);
};
function quitar5(){
  $('#info1').fadeOut(1);
  $('#info2').fadeOut(1);
  $('#info3').fadeOut(1);
  $('#info4').fadeOut(1);
};

