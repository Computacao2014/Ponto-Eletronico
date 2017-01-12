 <?php 
 ?>
<html>
<head>
	<title> SEJA BEM VINDO </title>

	
	<style>
		h2{
			direction: rtl;
			word-spacing: 10px;
		}
		fieldset{
			width: 800px;
			//margin: 200px;
			margin-left: 480px;
			margin-top: 100px;
			border-radius: 15px;
			background-color: white;

		}
		fieldset input{
			width: 1000%;
			margin-bottom: 10px;


		}
		html{
			
			background-color: rgb( 255, 255, 255);
		}
		
		a:link, a:visited {
		    background-color: #333;
		    color: white;
		    padding: 8px 14px;
		    text-align: center; 
		    display: inline-block;
		    width: 250px;
		    border-radius: 15px;
		    font-size: 24px;
		    -webkit-transition-duration: 0.4s; /* Safari */
    		transition-duration: 0.40s;
    		border-spacing: 10px;
		}

		a:hover, a:active {
		    background-color: #111;
		    color: white;
		}

	</style>
	<br><br>
	
	<img src="imagens/logouespi.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">




<center><div class="w3-content w3-display-container">
  <img class="mySlides" src="imagens/img1.jpg" style="width:500px">
  <img class="mySlides" src="imagens/img2.jpg" style="width:500px">

  <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
</div></center>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</head>
<body>
	<center>
	<fieldset>
		
		
		<h1><a href="<?= "loginGGeral.php" ?>"><?= " Gerente Geral Online" ?></a></h1>
		<h1><a href="<?= "loginGSetor.php" ?>"><?= "<center> Gerente Setor Online</center>" ?></a></h1>
		<h1><a href="<?= "loginFuncionario.php" ?>"><?= "<center> Funcionário Online</center>" ?></a>
		
	</fieldset>	
	</center>	
</body>

</html>