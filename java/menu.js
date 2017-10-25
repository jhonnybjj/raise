
	
	
$(".atividades,.agenda,.campanha,.galeria,#equipe_load").css('display','none');


	 		$("#feed").addClass("ativada_menu");

$('#feed').click(function() {
    $('.feed').slideDown(200).animate({opacity: 1}, 100);
 		$("#feed").addClass("ativada_menu");
	    $("#atividades,#agenda,#campanha,#galeria").removeClass("ativada_menu");

	$('.agenda,.campanha,.galeria,.atividades,#quadro_medalha_load,#equipe_load').animate({opacity: 0}, 0).hide(0);
});	
	
$('#atividades').click(function() {
    $('.atividades').slideDown(200).animate({opacity: 1}, 100);
 		$("#atividades").addClass("ativada_menu");
	    $("#feed,#agenda,#campanha,#galeria").removeClass("ativada_menu");

	$('.feed,.agenda,.campanha,.galeria,#quadro_medalha_load,#equipe_load').animate({opacity: 0}, 0).hide(0);
});	

$('#agenda').click(function() {
    $('.agenda').slideDown(200).animate({opacity: 1}, 100);
	 		$("#agenda").addClass("ativada_menu");
	    $("#feed,#atividades,#campanha,#galeria").removeClass("ativada_menu");

	$('.atividades,.feed,.campanha,.galeria,#quadro_medalha_load,#equipe_load').animate({opacity: 0}, 0).hide(0);
});	
    
	
$('#campanha').click(function() {
    $('.campanha').slideDown(200).animate({opacity: 1}, 100);
		 		$("#campanha").addClass("ativada_menu");
	    $("#feed,#atividades,#agenda,#galeria").removeClass("ativada_menu");

	$('.atividades,.feed,.agenda,.galeria,#quadro_medalha_load,#equipe_load').animate({opacity: 0}, 0).hide(0);
});	
		
$('#galeria').click(function() {
    $('.galeria').slideDown(200).animate({opacity: 1}, 100);
		 		$("#galeria").addClass("ativada_menu");
	    $("#feed,#atividades,#agenda,#campanha").removeClass("ativada_menu");

	$('.atividades,.feed,.agenda,.campanha,#quadro_medalha_load,#equipe_load').animate({opacity: 0}, 0).hide(0);
});		