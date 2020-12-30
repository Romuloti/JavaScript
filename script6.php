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

<h1>JavaScript</h1>

<div id="msg">

</div>

<button type="submit" onclick="window.history.forward();">Avançar</button><br/><br/>
<button type="submit" onclick="window.history.back();">Voltar</button><br/><br/>

<!-- <input type="button" value="Avançar" onclick="window.history.forward();"><br/><br/>
<input type="button" value="Voltar" onclick="window.history.back();"><br/><br/> -->

<script>
    console.log(window.location.href);

    // window.history.back();
    // window.history.forward();

    // window.localStorage.setItem('nome', 'Romulo');  Salvar eternamente
    // document.getElementById('msg').innerHTML = window.localStorage.getItem('nome');

    // window.sessionStorage.setItem('nome1', 'Romulo');  
    // document.getElementById('msg').innerHTML = window.sessionStorage.getItem('nome1');

    // window.open('http://www.google.com', '', 'width=500, height=400');

    // var janela = window.open('', '', 'width=500, height=400');
    // janela.document.write('isso é um texto escrito para o popoup');

    var janela = window.open('', '', 'width=500, height=400');
    janela.document.write('isso é um texto escrito para o popoup');
    janela.opener.document.write('isso é um texto escrito para Principal');
   

</script>

</body>
</html>