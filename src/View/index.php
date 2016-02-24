<!doctype html>
<html lang="pt-br">
<head>
	<title>Integrando técnologias, documentando e mostrando os passsos para montar um carro wireless</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Rodrigo Silveira"/>
	<meta name="description" content="Integrando técnologias, documentando e mostrando os passsos para montar um carro wireless"/>
	<meta name="keywords" content="IFRN, Currais novos, desenvolvimento, html, design, linux, php, mysql, POO, raspberry, eletrônica">
</head>
<body>
	
 <?php echo "<p>Tá tanquilo, tá favorável </p>"; 
 
 
 echo "em md5 ".md5("teste");
 echo "<br>";
 echo "número randômico ".mt_rand();
 echo "<br>";
 echo "em sha1 ".sha1("teste");
 function geraSaltAleatorio($tamanho = 32) {
 	return substr(sha1(mt_rand()), 0, $tamanho);
 }
 
 $salt = geraSaltAleatorio();
 //echo "<br>";
 // Senha do usuário, pode ter vindo do $_POST, $_GET ou outro lugar
 $senha = 'olá mundo';
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
 