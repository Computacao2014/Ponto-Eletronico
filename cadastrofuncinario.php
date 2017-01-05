<?php 
$semana = array(0,0,0,0,0,0,0);

 ?>
<html>
<head>
	<title> Tela De Cadastro de Funcinario </title>
	<h2>Cadastro</h2>
	<style>
		fieldset{
			width: 700px;
			//margin: 200px;
			margin-left: 250px;
			margin-top: 100px;

		}
		fieldset input{
			width: 100%;
			margin-bottom: 10px;
		}

	</style>
</head>
<body>
	<form method="post" action="cadastrandoFuncionario.php">
		<fieldset>
		<legend>Cadastro Funcionario:</legend>	
		


		<label>Nome:</label>
		<input type="text" name="nome" required="">

		<label>Senha:</label>
		<input type="password" name="senha" required=""> 

		<label>Email:</label>
		<input pattern="^[A-Za-z0-9_]{1,15}@[A-Za-z0-9_]{1,15}.[A-Za-z0-9_]{1,10}$" type="text" name="email" required="">
		
		<label>Rg:</label>
		<input pattern="^[0-9]{7}$" type="text" name="rg" required="">
		
		<label>Cpf:</label>
		<input pattern="^[0-9]{11}$" type="text" name="cpf" required="">

		<label>Telefone:</label>
		<input pattern="^[0-9]{1,15}$" type="text" name="telefone" required="">


		<label>Nome Setor:</label>
		<select name="id_setor" type="text" >
			<option value="1" >Reitoria</option>
  			<option value="2">Prex</option>
  			<option value="3">Prop</option>
		</select>



		<center><label>Função:</label>
		<select name="id_funcao" type="text" >
			<option value="1" >Segurança</option>
  			<option value="2">Limpeza</option>
  			<option value="3">Administrativo</option>

		</select></center>



		<br>
		<label>Horas semanais de trabalho:</label>
		<select name="id_carga_hrs" type="text" >
			<option value="1">30 Hrs semanais</option>
  			<option value="2">20 Hrs semanais</option>
  			<option value="3">35 Hrs semanais</option>

		</select><br>	
		

		
		<label>Escala de Trabalho</label>
		 <table>
		  <tr>
		    <th>Dia da Semana</th>
		    <th>Ativo</th>		  
		  </tr>
		  <tr>
		  	<td>Segunda-feira</td>
		  	<td>Terça-feira</td>
		  	<td>Quarta-feira</td>
		  	<td>Quinta-feira</td>
		  	<td>Sexta-feira</td>
		  	<td>Sábado</td>
		  	<td>Domingo</td>

		  </tr>
		  <tr>		 
		    <td><input type="checkbox" name="segunda" value="1"></td>
		    
		    <td><input type="checkbox" name="terca" value="2"></td>
		    
		    <td><input type="checkbox" name="quarta" value="3"></td>
		    
		    <td><input type="checkbox" name="quinta" value="4"></td>
		    
		    <td><input type="checkbox" name="sexta" value="5"></td>
		    
		    <td><input type="checkbox" name="sabado" value="6"></td>
		    
		    <td><input type="checkbox" name="domingo" value="7"></td>		  		   

		  </tr>
		</table> 

		



		<input type="submit" value="Cadastrar">
		</fieldset>
	</form>
	
</body>
</html>