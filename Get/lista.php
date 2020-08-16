<html>
<head>
<title> Resultados </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<fieldset id="resp">
<legend> Respostas </legend>
<?php
echo"Feito por Ingrid de Assis Souza GRUPO B 2ºIIA 2018<br>";


//EXERCÍCIO 1
echo"<p>1- Faça um programa que receba 2 números, calcule e mostre a subtração do primeiro pelo segundo número.</p>";
	$num1=isset ($_GET["num1"])?$_GET["num1"]:"Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$num2 = isset ($_GET["num2"])?$_GET["num2"]: "Não informado";//Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$resultado= $num1 - $num2; //subtrai as 2 variáveis
	echo "O resultado da subtração de $num1 por $num2 é igual a $resultado."; //printa na tela o resultado
	
//EXERCÍCIO 2
echo"<p>2- Faça um programa que receba 3 números, calcule e mostre a multiplicação entre eles.</p>"; //printa na tela o enunciado
	$n1= isset ($_GET["n1"])?$_GET["n1"]: "Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$n2= isset ($_GET["n2"])?$_GET["n2"]:"Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$n3= isset ($_GET["n3"])?$_GET["n3"]:"Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$res= $n1 * $n2 * $n3; //multiplica os valores
	echo"$n1 X $n2 X $n3 = $res."; //printa na tela o resultado

//EXERCÍCIO 3
echo"<p>3- Faça um programa que receba dois números, calcule e mostra a divisão do primeiro número pelo segundo. Sabe-se que o segundo número não pode ser 0, portanto, não é necessário se preocupar com as validações.</p>";
	$num1= isset ($_GET["num1"])?$_GET["num1"]:"Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$num2= isset ($_GET["num2"])?$_GET["num2"]:"Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$r= $num1/$num2; //divide as variáveis
	echo "$num1 / $num2 = $r."; //printa na tela os resultados



//EXERCÍCIO 4
echo"<p>4- Faça um programa que receba duas notas, calcule e mostre a média ponderada dessas notas, considereando peso 2 para a primeira e peso 3 para a segunda. </p>";
	$nota1= isset ($_GET["nota1"]) ?$_GET["nota1"]: "Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$nota2= isset ($_GET["nota2"]) ?$_GET["nota2"]: "Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$mediap= (($nota1*2) + ($nota2*3))/(2+3); //função de cálculo
	echo "A média ponderada é de: $mediap."; //imprime na tela o resultado


//EXERCÍCIO 5
echo"<p>5- Faça um programa que receba o preço de um produto, calcule e mostre o novo preço, sabendo-se que este sofreu um desconto de 10%.</p>";
	$preco= isset ($_GET["preco1"]) ?$_GET["preco1"]: "[Não informado]"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$novopreco= ($preco*10)/100; //cálculo com as variáveis usadas anteriormente
	echo"O novo preço do produto será de: $novopreco ."; //Imprime na tela o resultado


//EXERCÍCIO 6
echo"<p>6- Um funcionário recebe um salário fixo mais 4% de comissão sobre as vendas. Faça um programa que receba o salário fixo do funcionário e o valor de suas vendas, calcule e mostre a comissão e o salário final. </p>";
	$salafixo= isset ($_GET["salif"]) ?$_GET["salif"]: "Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$vendas= isset ($_GET["venda"]) ?$_GET["venda"]: "Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$comissao= ($vendas*4)/100; //Calcula
	$salfinal= $salafixo + $comissao; //Com o cálculo da comissao feito anteriormente, calculamos o salário final
	echo "O valor da comissão é de: R$ $comissao e o do salário final é de: R$ $salfinal.";  //Imprime o resultado na tela


//EXERCÍCIO 7
echo"<p>7- Faça um programa que receba o peso de uma pessoa, calcule e mostre:</p>"; //enunciado
echo"<p>a) O novo peso, se a pessoa engordar 15% sobre o peso digitado;</p>"; 
echo"<p>b) O novo peso, se a pessoa emagrecer 20% sobre o peso digitado.</p>";
	$peso = isset ($_GET["pesoa"]) ?$_GET["pesoa"]: "Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$engorda = (($peso*15)/100) + $peso; //primeiro cálculo
	$emagrece = $peso - (($peso*20)/100);//segundo cálculo
	echo "O novo peso da pessoa se ela engordar será de: $engorda kg e se ela emagrecer será de: $emagrece kg."; //Printa na tela o resultado


//EXERCÍCIO 8
echo"<p>8- Faça um programa que receba o peso de uma pessoa em quilos, calcule e mostre esse peso em gramas. </p>";
	$quilo= isset ($_GET["pesoq"]) ?$_GET["pesoq"]: "Não informado"; //Cria uma variável e atribui á ela o respectivo valor da label do formulário
	$grama= $quilo*1000; //função
	echo "O peso dessa pessoa em gramas é igual a $grama."; //Mostra para o usuário o resultado


//EXERCÍCIO 9
echo"<p>9- Faça um programa que calcule e mostre a área de um trapézio.</p>";
echo"<p>Sabe-se que: A = ((base maior + base menor) * altura)/2. </p>"; 
	$base_menor= isset ($_GET["baseme"]) ?$_GET["baseme"]: "Não informado"; //Cria uma varíavel de nome base_menor e atribui um valor do formulário vinculado á ela
	$base_maior= ($_GET["basema"]) ?$_GET["basema"]: "Não informado"; //Cria uma varíavel de nome base_maior e atribui um valor do formulário vinculado á ela
	$altura= ($_GET["altura"]) ?$_GET["altura"]: "Não informado"; //Cria uma varíavel de nome altura e atribui um valor do formulário vinculado á ela
	$area= (($base_maior + $base_menor) * $altura)/2; //Cálculo para a área de um trapézio
	echo "A área do trapézio é igual a $area."; //printa na tela

//EXERCÍCIO 10
echo"<p>10- Faça um programa que calcule e mostre a área de um quadrado. </p>";
echo"<p>Sabe-se que: A= lado * lado. </p>";
	$lado= ($_GET["lado"]) ?$_GET["lado"]: "Não informado"; //Cria uma varíavel de nome lado e atribui um valor do formulário vinculado á ela
	$area= $lado * $lado; //Calcula a área do quadrado de acordo com os valores das variáveis
	echo"A área desse quadrado é igual a: $area."; //printa na tela o conteúdo

?>
</fieldset>
</body>
</html>
