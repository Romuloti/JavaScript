<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Descrição da Página">
	<meta name="keywords" content="Palavras chaves para o motor de busca do google">
	<meta name="author" content="Romulo de Oliveira Azevedo">
	<link rel="stylesheet" href="estilo.css">
	<title>JavaScript - </title>
</head>
<body>

<p> <strong>document.</strong> = Objeto principal<br/></p>
<p><strong>getElementById:</strong> Busca o elemento pelo seu "ID". <strong><u>Método</u></strong>, forma de executar uma ação.<br/></p>
<p><strong>innerHTML =</strong> Elemento pego Objeto principal, <strong><u>Propriedade</u></strong> que quer alterar.<br/></p>
<p><strong>Text =</strong>  Valor da propriedade<br/></p>
<p style="text-align: center;"><strong>Objeto principal<strong><br/></p>
<p style="color: red;"><strong>Objeto principal<strong><br/></p>

<hr>
<p id="mostra">Clique Aqui</p>

<p class="teste">P1<br/></p>
<p class="teste">P2<br/></p>
<p class="teste">P3<br/></p>

<div class="props"></div>

<script>
	console.log(document.getElementsByTagName('p'));  // Busca por meio da tag
	console.log(document.getElementsByClassName('teste')); //Busca por meio da classe

	var x = document.getElementsByClassName('teste');
	x[0].innerHTML = 'Parágrafo - 01';
	x[1].innerHTML = 'Parágrafo - 02';
	x[2].innerHTML = 'Parágrafo - 03';

	var x = document.querySelectorAll('div.props');  //Retorna um array, pega os parágrafos=Elemento div com a classe=atributo props
	console.log(x);

	var x = document.querySelectorAll('p.teste');  // Retorna um array, pegar todos os parágrafos Elemento p com a classe=atributo teste
	console.log(x);

 
	document.getElementById('mostra').innerHTML = 'Teste para mostrar o frase!';  // busca por meio do ID

	
</script>

</body>
</html>