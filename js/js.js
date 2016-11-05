$(document).ready(function(){
	$('#cadastro').validate({
		rules:{
			codigo: {
				required: true
			},
			nome: {
				required: true
			},
			tipoMercadoria: {
				required: true
			},
			qtd: {
				required: true
			},
			preco: {
				required: true
			},
			tipoNegocio: {
				required: true
			}
		},
		messages: {
			codigo: {
				required: "Este campo é obrigatório"
			},
			nome: {
				required: "Este campo é obrigatório"
			},
			tipoMercadoria: {
				required: "Este campo é obrigatório"
			},
			qtd: {
				required: "Este campo é obrigatório"
			},
			preco: {
				required: "Este campo é obrigatório"
			},
			tipoNegocio: {
				required: "Este campo é obrigatório"
			}
		}
	});
});