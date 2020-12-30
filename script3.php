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
<h1 onclick="this.innerHTML = 'Obrigado!, Primeira Forma de ONCLICK'">Clique aqui</h1>

<h1 onclick="funcao(this)">Clique aqui</h1>

<h1 id="testandoporchamada" onclick="funcoes(this)">Clique aqui</h1>

<script>
    function funcao(elemento){
        elemento.innerHTML = 'Obrigado2, por função! Segunda Forma de ONCLICK';
    }

    function funcoes(){
        document.getElementById('testandoporchamada').innerHTML = 'Obrigado3, por funcao diferente!, Terceira Forma de ONCLICK';
    }

    document.getElementById('testandoporchamada').onclick = funcoes;

</script>

</body>
</html>