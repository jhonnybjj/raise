//  CADASTRAR_ATIVIDADE //
$( "#CADASTRAR_ATIVIDADE" ).click(function() {

      var checkbox_value = "";
    $(":checkbox").each(function () {
        var ischecked = $(this).is(":checked");
        if (ischecked) {
            checkbox_value += $(this).val() + "|";
        }
    });
    
if(document.forms['cadastrar_atividade'].atividade_ati.value === "1" || document.forms['cadastrar_atividade'].modalidade.value === "0" || document.forms['cadastrar_atividade'].como.value === "" || document.forms['cadastrar_atividade'].modalidade.hora_fim === "" || document.forms['cadastrar_atividade'].hora_fim.value === "" )
  {
   
	  // mobile
	  //alert ('preencha todos os campos');
	 navigator.notification.alert('Preencha todos os campos', alertDismissed, 'RAISE','OK');

    return false;
  }
    
	
	var formData = {
    'dias'                   : checkbox_value,
	'atividade_ati'          : $('select[name=atividade_ati]').val(),
	'modalidade'           	 : $('select[name=modalidade]').val(),
	'como'          		 : $('select[name=como]').val(),
	'hora_inicio'       	 : $('input[name=hora_inicio]').val(),
	'hora_fim'     	 		 : $('input[name=hora_fim]').val(),
	'local'    				 : $('input[name=local]').val()
};
$.ajax({
	type        : 'POST',
	url         : "http://hostplasma.com.br/raise/CADASTRAR_ATIVIDADE.php?nocache=" + Math.random() + "&id=" + id + "",
	data        : formData,
	crossDomain: true,
	cache: false,
	  beforeSend: function() {
				//$("#enviar_usuarios").text('Verificando...');
			}, 
			success: function(data) {
				if (data == "success") {
				navigator.notification.alert('Atividade cadastrada com sucesso!', alertDismissed, 'RAISE','OK');
					$('.adicionar_atividades').animate({opacity: 0}, 500).hide(0);
					
    location.reload();
return;

				} else if (data == "error") {     

				navigator.notification.alert('Erro, tente novamente!', alertDismissed, 'RAISE','OK');
            return;

				 }
			}
		   
});
	
});
	
// CADASTRAR_ATIVIDADE //		