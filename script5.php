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
    <style>
        .pintada{
            background: silver;
        }
    </style>
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

<table border="1" class="pintar">
<thead>
    <tr>
        <th>Nome: </th>
        <th>Telefone: </th>

    </tr>
</thead>
<tbody>
    <tr>
        <td>Romulo de Oliveira Azevedo</td>
        <td>(061) 9.9267-7435</td>

    </tr>
    <tr>
        <td>Azevedo</td>
        <td>(061) 9.9267-7435</td>

    </tr>
    <tr>
        <td>Romulo </td>
        <td>(061) 9.9267-7435</td>

    </tr>
    <tr>
        <td>Oliveira </td>
        <td>(061) 9.9267-7435</td>

    </tr>
    <tr>
        <td>Show </td>
        <td>(061) 9.9267-7435</td>

    </tr>
    <tr>
        <td>XXXXXXXXX </td>
        <td>(061) 9.9267-7435</td>

    </tr>
</tbody>


</table>

<script>
    window.onload=function(){
        var linhas = document.querySelectorAll('.pintar tbody tr');
            for(var i=0; i<linhas.length; i+=2){
                linhas[i].className = 'pintada';               

            }

    }


</script>

</body>
</html>