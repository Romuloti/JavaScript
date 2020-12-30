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
<h1>Troca CSS - Imagen - Texto - Escreve no conteúdo inteiro</h1>
<img id="muda" src="imagen.jpg" alt="Texto alternativo">

<script>

    document.getElementById('muda').style.color = 'blue';       // Trocar CSS

    document.getElementById('muda').src = "foto.jpg";       // Trocar imagen

    document.getElementById('muda').alt = "Segundo o texto alternativo";    // Trocar texto
    

    document.write('<br/><br/><br/>Isso é um documento'); // Utilizado para escrever no documento



</script>

</body>
</html>