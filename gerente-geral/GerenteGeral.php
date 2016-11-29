<?php

 include("Pessoa.php");

class GerenteGeral extends Pessoa {

}
?>

<html>
<head>
	<title></title>
</head>
<body>
<?php
  
  $teste =  new GerenteGeral();

  $teste->imprime();
  ?>

</body>
</html>