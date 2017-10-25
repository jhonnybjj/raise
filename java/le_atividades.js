var url_pesquisar = "http://hostplasma.com.br/raise/LE_ATIVIDADES_USUARIOS.php?nocache=" + Math.random() + "&id_usuario=" + id + "";
$.getJSON(url_pesquisar, function(result_pesquisar) {
console.log(result_pesquisar);
$.each(result_pesquisar, function(i, field) {

var como = field.como; 
var atividade = field.atividade; 
var id_atividade = field.id; 

var hora_inicio = field.hora_inicio; 
var hora_fim = field.hora_fim;            
var data = field.data;
var dias = field.dias;
var esporte = field.esporte;
var local = field.local;
var id_usuario = field.id_usuario;             
                
switch (esporte) {
	case "1":
		var esporte = "NATACAO";
		var icone	  = "natacao.png";
		break
	case "2":
		var esporte = "CORRIDA";
		var icone	  = "correndo.png";
		break
	case "3":
		var esporte = "ACADEMIA";
		var icone	  = "academia.png";
		break
	case "4":
		var esporte = "CROSS FIT";
		var icone	  = "crossfit.png";
		break
	case "5":
		var esporte = "BICICLETA";
		var icone	  = "bicicleta.png";
		break
	case "6":
		var esporte = "FUTEBOL";
		var icone	  = "futebol.png";
		break
	case "7":
		var esporte = "SURF";
		var icone	  = "surf.png";
		break
	case "8":
		var esporte = "SKATE";
		var icone	  = "skateboard.png";
		break
	case "9":
		var esporte = "DESCANSO";
		var icone	  = "dormindo.png";
		break
	default:
		var esporte = "OUTROS";
		var icone	  = "outros.png";

}          

$(".delbutton").click(function(){ 
var del_id = $(this).attr('id');
var info = 'id=' + del_id;
$.ajax({
type: "POST",
url: "http://hostplasma.com.br/raise/DELETAR_ATIVIDADES.php",
data: info,
success: function(){
}
});
$(this).parents(".atividades_usuarioss").animate({ backgroundColor: "#fbc7c7" }, "fast")
.animate({ opacity: "hide" }, "slow");
return false;
});      
    
    $(".atividades_usuario").append("<div class='atividades_usuarioss'><a id='"+ id_atividade +"' href='javascript:void();' class='delbutton'><small style='float:right;'><i class='fa fa-times'></i></small></a><img style='width:64px;float: left;MARGIN-RIGHT: 10px;' src='img/"+ icone +"'><b style='font-family: 'PT Sans Narrow', sans-serif;'>"+ esporte +"</b> ("+ como +")<br><small>"+ local +"</small><br><small>"+ atividade +"</small> - <small>"+ hora_inicio +" / "+ hora_fim +"</small><br><small>"+ dias +"</small></div>"); 

        // <small style='float:right;'>"+ data +"</small>
});
});