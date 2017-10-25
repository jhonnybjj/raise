		
//  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  
$( "#seguir" ).click(function() {
    
var id_usuario           = $(".pego_infos").attr('id_usuario');
var email_logado_principal	 = $(".pego_infos").attr('email_logado_principal');
    

        alert(id_usuario);
        alert(email_logado_principal);

    
var formData = {
'id_usuario'                          : id_usuario,
'email_logado_principal'              : email_logado_principal 
};

$.ajax({
type        : 'POST',
url         : "http://hostplasma.com.br/raise/SEGUIRR.php?nocache=" + Math.random() + "&id=" + id + "",
data        : formData,
crossDomain: true,
cache: false,
beforeSend: function() {
//$("#enviar_usuarios").text('Verificando...');
}, 
success: function(data) {
if (data == "success") {
navigator.notification.alert('Você está seguiundo agora', alertDismissed, 'RAISE','OK');
$('.adicionar_atividades').animate({opacity: 0}, 500).hide(0);
location.reload();
return;
} else if (data == "error") {     
navigator.notification.alert('Erro, tente novamente!', alertDismissed, 'RAISE','OK');
return;}}	   });	});
//  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  CADASTRAR_ATIVIDADE ////  CADASTRAR_ATIVIDADE // //  	
	
