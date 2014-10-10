var form = document.querySelector("#form-busca");
var input = document.querySelector("#q");
var banner = document.querySelector(".destaque img");
var imagens = ["img/destaque-home.png", "img/destaque-home-2.png"];
var banerAtual = 0;

function trocaBanner(){
	banerAtual = (banerAtual+1) % imagens.length;
	banner.src = imagens[banerAtual];
}

var timer = setInterval(trocaBanner, 4000);
var controle = document.querySelector(".pause");

form.onsubmit = function(){
	if(input.value == ''){
		alert("Informe o valor do campo");
		input.style.backgroundColor="red";
		return false;
	}
};

input.onfocus = function(){
	input.style.backgroundColor="white";
};

controle.onclick = function(){
	if(controle.className == "pause"){
		clearInterval(timer);
		controle.className = "play";
	}else{
		timer = setInterval(trocaBanner, 4000);
		controle.className = "pause";
	}
	return false;
};

// Inclusao do JQuery
$('.painel').addClass('painel-compacto');

$('.novidades button').click(function() {
	$('.novidades').removeClass('painel-compacto');
});

$('.mais-vendidos button').click(function() {
	$('.mais-vendidos').removeClass('painel-compacto');
});
