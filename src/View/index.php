<!doctype html>
<html lang="pt-br">
<head>
	<title>Integrando t�cnologias, documentando e mostrando os passsos para montar um carro wireless</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Rodrigo Silveira"/>
	<meta name="description" content="Integrando t�cnologias, documentando e mostrando os passsos para montar um carro wireless"/>
	<meta name="keywords" content="IFRN, Currais novos, desenvolvimento, html, design, linux, php, mysql, POO, raspberry, eletr�nica">
</head>
<body>
	
 <?php echo "<p>T� tanquilo, t� favor�vel </p>"; 
 
 
 echo "em md5 ".md5("teste");
 echo "<br>";
 echo "n�mero rand�mico ".mt_rand();
 echo "<br>";
 echo "em sha1 ".sha1("teste");
 function geraSaltAleatorio($tamanho = 32) {
 	return substr(sha1(mt_rand()), 0, $tamanho);
 }
 
 $salt = geraSaltAleatorio();
 //echo "<br>";
 // Senha do usu�rio, pode ter vindo do $_POST, $_GET ou outro lugar
 $senha = 'ol� mundo';
 // Cria um hash
 $hash = md5($senha . $salt);
 // Encripta esse hash 1000 vezes
 for ($i = 0; $i < 1000; $i++) {
 	$hash = md5($hash);
 }
 
 echo "<br>";
 //echo $hash;
 
 
 ?>
 </body>
</html>
 