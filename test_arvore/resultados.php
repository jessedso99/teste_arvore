<?php


/*queria deixar esse valores em alguma tabela de banco de dados e fazer a compraração
com as respotas do aluno mas não consegui. Cheguei a criar as tabelas e a conexão com o banco mas não consegui trazer os dados pra tela.
Então, como teste, fiz assim mesmmo, com as respostas pre defindas nesse codigo*/

$resp=array("","","","","");
$resp[0]=filter_input(INPUT_POST, "qst1", FILTER_SANITIZE_STRING);
$resp[1]=filter_input(INPUT_POST, "qst2", FILTER_SANITIZE_STRING);
$resp[2]=filter_input(INPUT_POST, "qst3", FILTER_SANITIZE_STRING);
$resp[3]=filter_input(INPUT_POST, "qst4", FILTER_SANITIZE_STRING);
$resp[4]=filter_input(INPUT_POST, "qst5", FILTER_SANITIZE_STRING);
if($resp[0]=="" xor $resp[0]!="a" xor $resp[0]!="b" xor $resp[0]!="c" xor $resp[0]!="d" xor $resp[0]!="e" or
$resp[1]=="" xor $resp[1]!="a" xor $resp[1]!="b" xor $resp[1]!="c" xor $resp[1]!="d" xor $resp[1]!="e" or
$resp[2]=="" xor $resp[2]!="a" xor $resp[2]!="b" xor $resp[2]!="c" xor $resp[2]!="d" xor $resp[2]!="e" or
$resp[3]=="" xor $resp[3]!="a" xor $resp[3]!="b" xor $resp[3]!="c" xor $resp[3]!="d" xor $resp[3]!="e" or
$resp[4]=="" xor $resp[4]!="a" xor $resp[4]!="b" xor $resp[4]!="c" xor $resp[4]!="d" xor $resp[4]!="e"){
	echo"<strong> Há questoes com respostas invalidas. Retorne para corriji-las.<strong>";
}

else{
	$arrayteste= array("a",'b',"d","e","a"); //defina aqui as respostas corretas
echo"As respotas corretas são:<br>";
for($y=0;$y<5;$y++){
	print_r ($arrayteste[$y].", ");
}
echo"<br><br>";
echo "Suas respostas:<br> $resp[0], $resp[1], $resp[2], $resp[3] , $resp[4].<br><br>";
$pontos=0;
	for($x=0; $x<5;$x++){
		if($arrayteste[$x]==$resp[$x]){
			$pontos=$pontos+20;
		}
	}
	echo"<strong>voce acertou $pontos% da prova</strong>";
}
?>
	
