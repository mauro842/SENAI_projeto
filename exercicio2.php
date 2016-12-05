
<html>
	<head>
        <meta charset="utf-8">
		<style type="text/css"> 
			#div1 { 
				width: 350px;
				padding: 20px;
				border: 2px solid #000;
				float: left;
			}
			#div2{
				margin-left: 40px;
				float: left;
				border: 2px solid #000;
				width:350px;
				height: 200px;
				padding: 20px;
				box-sizing: border-box;
			}
            #div3{
                margin-left: 20%;
            }
		</style>
	</head>
	<body>
		<div id="div3">
			<fieldset style="background-color:#efefef; display: inline-block;">
				<legend>Exercicio 2</legend>
				<?php
					$valor = isset($_POST["preco"]) ?$_POST["preco"]:null;
					$parc = isset($_POST["parc"]) ?$_POST["parc"]:null;
				?>
				<div id="div1">
					<form method="POST">
						Valor: <input type="number" step="any" name="preco" autofocus/><br><br>
						Parcelas:  <select id="parc" name="parc">
							<option value="branco" disabled selected>-Selecione-</option>
							<option value="1">Á vista</option>
							<option value="2">2x s/ Juros</option>
							<option value="3">3x s/ Juros</option>
							</select><br><br>
							<button type="submit">Calcular</button>
					</form>
				</div>
				<div id="div2">
					<?php
						if ($parc==null){
							echo "Favor selecionar o número de parcelas.";
						}
						else if ($parc=="1") {
							$valor = $valor-($valor*0.1);
							echo '-Pagamento a vista-';
							echo '<br/><br/><br/>';
							echo 'Desconto de 10%';
							echo '<br/><br/>';
							echo "Valor Total: R$ ".round($valor,2);
							echo '<br/><br/>';
							echo "Comissão do vendedor: R$ ".round($valor*0.05,2);
						}
						else if ($parc=="2"){
							echo '-Pagamento parcelado-';
							echo '<br/><br/><br/>';
							echo "Parcelado em 2x de R$ ".round($valor/2,2) ." sem juros";
							echo '<br/><br/>';
							echo "Valor Total: R$ ".round($valor,2);
							echo '<br/><br/>';
							echo "Comissão do vendedor: R$ ".round($valor*0.05,2);
							
						}
						else if ($parc=="3"){
							echo '-Pagamento parcelado-';
							echo '<br/><br/><br/>';
							echo "Parcelado em 3x de ".round($valor/3,2) ." sem juros";
							echo '<br/><br/>';
							echo "Valor Total: R$ ".round($valor,2);
							echo '<br/><br/>';
							echo "Comissão do vendedor: R$ ".round($valor*0.05,2);
							
						}
					?>
				</div>
			</fieldset>
		</div>
	</body>
</html>