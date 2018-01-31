$(document).ready(function(){
$('#login').keydown(function (e){
    if(e.keyCode == 13){
        $("#login_boton").click();
    }
});
$('#password').keydown(function (e){
    if(e.keyCode == 13){
        $("#login_boton").click();
    }
});
    var inputEmail = $("#login");
    var inputPassword1= $("#password");

   $('#login_boton').click(function(){

comprobarCampos();
   });
$('#login').click(function(){
$('#error').css('display', 'none');
$('#error').css('top', '86');
   });
$('#password').click(function(){
$('#error').css('display', 'none');
$('#error').css('top', '86');
   });
      function comprobarCampos() {

        //NO hay nada escrito
    if(inputEmail.val().length == 0){
        alert('Por favor, introduzca su nombre de usuario');
          return false;
    }

    // SI rellenado, SI email valido
    else{
        validatePassword1();
          return false;
    }


      }
function validatePassword1(){
//NO tiene minimo de 5 caracteres o mas de 12 caracteres
    if(inputPassword1.val().length == 0){
        alert('Por favor, introduzca su contraseña');
return false;
    }
//NO tiene minimo de 5 caracteres o mas de 12 caracteres
  
    else{  
Proceso($('#login').val(), $('#password').val());
        return false;  
    }

}
function Proceso(valor, valor2){

	    var parametro = {
	        "valor" : valor,
          "valor2" : valor2
	    };

	    $.ajax({
	        data:  parametro,
	        url:   'validacion.php',
	        type:  'post',
	        beforeSend: function () {
                $("#login").html("espere...");
			    $("#password").html("espere...");
	        },
	        success:  function (respuesta) {
			    var json = eval("(" + respuesta + ")");

		if((json.confirmacion).toString()== "true"){

				$(location).attr('href',"Principal.php");

                }
                else{
alert("Error")}
	        }
	    });
	}


});
