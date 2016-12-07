<html>
	<head>
		<meta charset="utf-8">
		<style type="text/css">
            body {
                margin: 20px;
            }
            fieldset {
                     display: inline;
                     padding-bottom: 0px;
            }
            #fd1{
                width: 250px;
            }
            #div1{
                float: left;
            }
            #div2 {
                float: left;
                text-align: center;
                margin-left: 15px;
                margin-bottom: 15px;
            }
            @media only screen and (min-width: 770px){
                #div3{
                    margin-left: 20%;
                }
            }      
		</style>
	</head>
	<body>
	<?php
		$livro = isset($_POST["livro"]) ?$_POST["livro"]:null;
		$tip = isset($_POST["tip"]) ?$_POST["tip"]:null;
		
	?>
	<div id="div3">
		<fieldset style="background-color:#efefef; display: inline-block;">
			<legend>Exercicio 3</legend>
			<div id="div1">
				<fieldset>
					<legend>Sistema Biblioteca</legend>
					<form method="POST">
						Livro: <input type="text" name="livro" autofocus/><br><br>
						<input name="tip" type="radio" value="prof"/>Professor
						<input name="tip" type="radio" value="aluno"/>Aluno<bR><br> 
						Data:  <?php echo date("d/m/Y"); ?><br><br>
						<button type="submit">Enviar</button><br>
					</form>
				</fieldset><br><br>
			</div>
		<?php if($livro!=null){ ?>
			<div id="div2">
				<fieldset id="fd1">
					<legend>Recibo de empréstimo</legend>
					<div>
						<p><?php echo "Livro: ".$livro ?></p><br>
						<p><?php echo $tip=="prof"? "Você tem 10 dias para devolver o livro.": "Você tem 3 dias para devolver o livro."  ?></p><br>
						<p><?php echo $tip=="prof"?"Data de devolução: ".date("d/m/Y", strtotime("+10 days")):"Data de devolução: ".date("d/m/Y", strtotime("+3 days")); ?></p> 
					</div>
				</fieldset>
			</div>
		<?php } ?>
		</fieldset>
	</div>
	</body>
</html>