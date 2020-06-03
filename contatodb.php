<?php
 
		    include 'conecta.inc.php';
	   
	   
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$assunto = $_POST['assunto'];
			$mensagem = $_POST['mensagem'];

			$dados = "INSERT INTO faleconosco (id,nome,email,telefone,assunto,mensagem) VALUES (null,'$nome','$email','$telefone','$assunto','$mensagem');";
			
			
			$conexao= dbConnect();
			$query = mysqli_query($conexao,$dados);

			if($query){
				echo "<h4>Dados enviados com sucessso!</h4></center>";
		
		    }else{
		    	echo "<center><h4>Não foi possível enviar o e-mail. <a href=index.php?pg=faleconosco>Tente novamente.</a></h4></center>";
			}
			
		 
?>