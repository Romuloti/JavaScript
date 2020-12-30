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
<!-- <body onload="funx()">                      serve para executar no carregamento da página--> 

<p> <strong>document.</strong> = Objeto principal<br/></p>
<p><strong>getElementById:</strong> Busca o elemento pelo seu "ID". <strong><u>Método</u></strong>, forma de executar uma ação.<br/></p>
<p><strong>innerHTML =</strong> Elemento pego Objeto principal, <strong><u>Propriedade</u></strong> que quer alterar.<br/></p>
<p><strong>Text =</strong>  Valor da propriedade<br/></p>
<p style="text-align: center;"><strong>Objeto principal<strong><br/></p>
<p style="color: red;"><strong>Objeto principal<strong><br/></p>

<hr>

<h1 id="" onmouseover="funcao00(this)" onmouseout="funcao007(this)">Passe o mouse por cima da frase aqui!</h1>

<br/><br/>
<hr>

<input type="text" id="x" onchange="funz()"> 

<hr><br/><br/>

 <select name="" id="combo" onchange="funcoes()">
    <option value="opcao1">Opção 01</option>
    <option value="opcao2">Opção 02</option>
    <option value="opcao3">Opção 03</option>
    <option value="opcao4">Opção 04</option>
    <option value="opcao5">Opção 05</option>
</select>

<script>

    function funcao00(elemento){
        elemento.innerHTML = "OK, após colocar o mouse em cima da frase, este irá mudar";

    }


    function funcao007(elemento){
        elemento.innerHTML = "O mouse saiu de cima da frase, transformando para está linha agora!";

    }


 function funz(){
        alert('Opção alterado com sucesso');
    }
    document.ElementById('x').onclick = funz;


    function funcoes(){
        alert('Opção alterado');
    }
    document.ElementById('combo').onclick = funcoes;


    function funx(){                                   // Carregar body
        alert('A página foi carregada');
    }

</script>

</body>
</html>