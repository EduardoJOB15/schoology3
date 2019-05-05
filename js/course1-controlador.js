
        (function ocultarinicio(){
            $('#actualizaciones2').fadeOut(1);
            $('#grados2').fadeOut(1);
            $('#asistencia2').fadeOut(1);
            $('#miembros2').fadeOut(1);
           })();
   
           function quitar1(){
            $('#actualizaciones2').fadeOut(1);
            $('#grados2').fadeOut(1);
            $('#asistencia2').fadeOut(1);
            $('#miembros2').fadeOut(1);
           };
         
           function quitar2(){
            $('#materiales2').fadeOut(1);
            $('#grados2').fadeOut(1);
            $('#asistencia2').fadeOut(1);
            $('#miembros2').fadeOut(1);
           };
   
           function quitar3(){
            $('#materiales2').fadeOut(1);
            $('#actualizaciones2').fadeOut(1);
            $('#asistencia2').fadeOut(1);
            $('#miembros2').fadeOut(1);
            $('#right').fadeOut(1);
           };
   
           function quitar4(){
            $('#materiales2').fadeOut(1);
            $('#actualizaciones2').fadeOut(1);
            $('#grados2').fadeOut(1);
            $('#miembros2').fadeOut(1);
            $('#right').fadeOut(1);
           };
   
           function quitar5(){
            $('#materiales2').fadeOut(1);
            $('#actualizaciones2').fadeOut(1);
            $('#grados2').fadeOut(1);
            $('#asistencia2').fadeOut(1);
            $('#right').fadeOut(1);
           };
         
           $('#materiales1').click(function poner1(){
               $('#materiales2').fadeIn(2);
               $('#right').fadeIn(2);
               (quitar1())();
           });
   
           $('#actualizaciones1').click(function poner2(){
               $('#actualizaciones2').fadeIn(2);
               $('#right').fadeIn(2);
               (quitar2())();
           });
   
           $('#grados1').click(function poner3(){
               $('#grados2').fadeIn(2);
               (quitar3())();
           });
   
           $('#asistencia1').click(function poner4(){
               $('#asistencia2').fadeIn(2);
               (quitar4())();
           });
   
           $('#miembros1').click(function poner5(){
               $('#miembros2').fadeIn(2);
               $('#right').fadeIn(2);
               (quitar5())();
           });
   
           function mostrar(id) {
             obj = document.getElementById(id);
             obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
           }
   