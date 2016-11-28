<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Integrador</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
        <script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
        <script type='text/javascript' src='js/dynamicpage.js'></script>
    </head>
    <body>
        <section id="main-content">
            <div id="guts">
        <?php
            $num = isset($_POST["num"]) ?$_POST["num"]:null;
        ?>
        <h1 id="contato">Exercicios</h1>
        <div id="formexerc">
            <form method="POST" action="">
                
                <button type="submit" name="num" id="botaoexera" value="1">1 - Calcular se um número é divisível por 10, 5, ou 2.</button><br><br><!--exercicio 4 lista 12-->
                <button type="submit" name="num" id="botaoexerb" value="2">2 - Calcular métodos de pagamento. </button><br><br><!--exercicio 10 lista 12-->
                <button type="submit" name="num" id="botaoexerc" value="3">3 - Calcular devolução de livro. </button><br><br><!--exercicio 16 lista 12-->
            </form>
        </div>
        <?php if($num==1) { ?>
                <div id="divframe">
			<iframe id="frame1" src="exercicio1.php" scrolling="no"></iframe><br><br>
                    </div>
			<style>
				#botaoexera{
				  background: #ffffff;
				  background-image: -webkit-linear-gradient(top, #ffffff, #354047);
				  background-image: -moz-linear-gradient(top, #ffffff, #354047);
				  background-image: -ms-linear-gradient(top, #ffffff, #354047);
				  background-image: -o-linear-gradient(top, #ffffff, #354047);
				  background-image: linear-gradient(to bottom, #ffffff, #354047);
				  text-decoration: none;
				}
			</style>
	    <?php } ?>
        <?php if($num==2) { ?>
                <div id="divframe">
			<iframe id="frame2" src="exercicio2.php" scrolling="no" ></iframe><br><br>
                    </div>
			<style>
				#botaoexerb{
				  background: #ffffff;
				  background-image: -webkit-linear-gradient(top, #ffffff, #354047);
				  background-image: -moz-linear-gradient(top, #ffffff, #354047);
				  background-image: -ms-linear-gradient(top, #ffffff, #354047);
				  background-image: -o-linear-gradient(top, #ffffff, #354047);
				  background-image: linear-gradient(to bottom, #ffffff, #354047);
				  text-decoration: none;
				}
			</style>
	    <?php } ?>
        <?php if($num==3) { ?>
                <div id="divframe">
			<iframe id="frame3" src="exercicio3.php" scrolling="no" ></iframe><br><br>
                </div>
			<style>
				#botaoexerc{
				  background: #ffffff;
				  background-image: -webkit-linear-gradient(top, #ffffff, #354047);
				  background-image: -moz-linear-gradient(top, #ffffff, #354047);
				  background-image: -ms-linear-gradient(top, #ffffff, #354047);
				  background-image: -o-linear-gradient(top, #ffffff, #354047);
				  background-image: linear-gradient(to bottom, #ffffff, #354047);
				  text-decoration: none;
				}
			</style>
	    <?php } ?>
            </div>
</section>
    </body>
</html>