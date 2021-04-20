<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$texto = $_POST['texto'];
	$privacy = $_POST['privacy'];

	$to = "contato@claudiotrezub.com.br";
	$subject = 'Contato via Site form';

	$txt = 
	"Nome:".$nome."<br/>
	Email:".$email."<br/><br>
	Assunto:".$assunto."<br/><br>
	Menssagem:<br>".$texto."<br><br>
	Privacy:".$privacy."<br>";

	$headers = "MINE-Version: 1.0"."\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8"."\r\n";
	$headers .= "From: Formulário site <contato@claudiotrezub.com.br>";

	if(mail($to,$subject,$txt,$headers)){
	    echo "<span id='span-resultado'>E-mail enviado com sucesso! Estarei respondendo o mais rápido possível! Obrigado pelo contato!</span>";
	}else{
		echo "<span id='span-resultado'>Parece que estamos com problemas em nosso servidor...
				<br>
				Pedimos que tente enviar o email mais tarde ou encaminhe para
				<br>
					<a href='mailto:contato@claudiotrezub.com.br'>contato@claudiotrezub.com.br</a>
			  </span>";
	}

} ?>