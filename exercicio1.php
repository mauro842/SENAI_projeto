<html>
	<head>		
        <meta charset="utf-8">
	</head>
	<body>
	<?php
		$num1 = isset($_POST["num1"])?$_POST["num1"]:null;
	?>
		<div>
			<fieldset style="display: inline-block;">
				<legend>Exercicio 1</legend>
				<form method="POST" action="">
					Digite um número: <input type="number" name="num1" min=0 autofocus/><br><br>
					<button type="submit" name="button">Enviar</button>
				</form>   
				<?php
				if ($num1!=null){
					if ($num1%2==0){
						echo 'O número é divisivel por 2';
					}
					else if ($num1%5==0){
						echo 'O número é divisivel por 5';			
					}
					else if ($num1%10==0){
						echo 'O número é divisivel por 10';				
					}
					else {
						echo 'O número não é divisivel por 10, 5 ou 2.';
					}
				}
				else{
					null;
				}
				?>             
			</fieldset>
		</div>
</html>