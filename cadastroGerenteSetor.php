<html>
	<head>
		<style>
			ul {
    			list-style-type: none;
    			margin: 0;
    			padding: 0;
    			overflow: hidden;
    			background-color: #333;
    			margin-left: 0px;
  				margin-top: 0px;
			}

			li {
    			float: left;
			}

			li a {
    			display: block;
    			color: white;
    			text-align: center;
    			padding: 14px 16px;
    			text-decoration: none;
			}

			li a:hover {
    			background-color: #111;
			}

			fieldset{
				width: 700px;
				margin-left: 0px;
				margin-top: 0px;
			}

			fieldset input{
				margin-left: 250px;
				width: 100%;
				margin-bottom: 10px;
			}

		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	</head>


	<body>
		<br>
			<img src="imagens/logouespi.png">
		<br><br>

		<ul>
  			<li><a class="active" href="painelgerentegeral.php">Página Gerente Geral</a></li>
  			<li><a href="cadastroGerenteSetor.php">Cadastrar Gerente Setor</a></li>
  			<li><a href="listargsetor.php">Listar Gerente Setor</a></li>
  			<li><a href="testeread.php">Listar Funcionários Geral</a></li>
  			<li><a href="logout.php">Sair</a></li>
		</ul>

  	<form method="post" action="cadastrandoGerSetor.php">
			<fieldset>
				<center><h3>Cadrastrar Gerente Setor:</h3>
				
				<input type="text" name="nome" placeholder="Nome" required=""><br>
				<input type="password" placeholder="Senha" name="senha" required=""> 
				<input pattern="^[A-Za-z0-9_]{1,15}@[A-Za-z0-9_]{1,15}.[A-Za-z0-9_]{1,10}$" type="text" placeholder="Email" name="email" required="">
				<input pattern="^[0-9]{7}$" type="text" placeholder="Rg" name="rg" required="">
				<input pattern="^[0-9]{11}$" type="text" name="cpf" placeholder="Cpf" required="">
				<input pattern="^[0-9]{1,15}$" type="text" placeholder="Telefone" name="telefone">
				<input type="text" name="matricula" placeholder="Matrícula" required="">
				
				<select class="" name="id_setor" type="text" >
					
  					<option value="1">PRÓ-REITORIA DE EXTENSÃO, ASSUNTOS ESTUDANTIS E COMUNITÁRIOS - PREX</option>
  					<option value="2">PRÓ-REITORIA DE PESQUISA E PÓS-GRADUAÇÃO - PROP</option>
  					<option value="3" >REITORIA</option>
  					<option value="4">PRÓ-REITORIA DE ENSINO E GRADUAÇÃO - PREG</option>
  					<option value="5">PRÓ – REITORIA DE PLANEJAMENTO E ORÇAMENTO - PROPLAN</option>
  					<option value="6">NÚCLEO DE CONCURSOS E PROMOÇÃO DE EVENTOS – NUCEPE</option>
  					<option value="7">DIREÇÃO DE CENTRO DE CIÊNCIAS DA SAÚDE - CCS</option>
  					<option value="8">DIREÇÃO DE CENTRO DE CIÊNCIAS DA NATUREZA - CCN</option>
  					<option value="9">DIREÇÃO DE CENTRO DE CIÊNCIAS SOCIAIS E APLICADAS - CCSA</option>
  					<option value="10">DIREÇÃO DE CENTRO DE CIÊNCIAS HUMANAS E LETRAS - CCHL</option>
  					<option value="11" >DIREÇÃO DE CENTRO DE TECNOLOGIA E URBANISMO - CTU</option>
  					<option value="12" >DIREÇÃO DE CENTRO DE CIÊNCIAS DA EDUCAÇÃO COMUNICAÇÃO E ARTES - CCECA</option>
  					<option value="13" >PREFEITURA UNIVERSITÁRIA</option>
  					<option value="14" >GRÁFICA E EDITORA</option>
  					<option value="15" >ASCOM</option>
  					<option value="16" >PROCURADORIA JURÍDICA</option>
  					<option value="17" >AUDITORIA INTERNA</option>
  					<option value="18" >COMISSÃO ESPECIAL DE LICITAÇÃO – CEL</option>
  					<option value="19" >COMISSÃO PERMANENTE DE LICITAÇÃO</option>
  					<option value="20" >COMISSÃO PERMANENTE DO PESSOAL DOCENTE</option>
  					<option value="21" >PRÓ-REITORIA DE ADMINISTRAÇÃO E RECURSOS HUMANOS – PRAD</option>

				</select>


			<br><br></center>

			</fieldset>
			<center><input class="btn btn-success"  type='submit' value='Cadastrar'></center>
	</form>


	
	</body>
</html>