
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title> SIMECAP</title>
  	
	<meta name="viewport" content="width=device-width, initial-scale =1">	
  	<link  rel="stylesheet" href="<?php echo URL_BASE?>assets/css/auxiliar.css">
    <link  rel="stylesheet" href="<?php echo URL_BASE?>assets/css/grade.css">
  	<link  rel="stylesheet" href="<?php echo URL_BASE?>assets/css/style.css">		
        
        <script type="text/javascript" src="<?php echo URL_BASE?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_BASE?>assets/js/js.js"></script>        
	
			
       
</head>
<body class="base-login-util">
    <div class="">	
		<div class="caixa-login position-relative">
			<form action="" method="post">
				<h1>login</h1>
				<label> <span class="text-label label">Login</span> 
				<input	type="text" name="login">
				</label> <label> <span class="text-label label">Senha</span> 
				<input	type="password" name="senha">
				</label> <input type="submit" value="Entrar" class="btn btn-laranja">
			</form>
			<a href="" class="senha text-azul mt-3 d-block">Esqueci minha senha</a>
			
			<div class="mostraCampo">
			<div class="caixa">
				<span class="sair senha">X</span>
				<h1 class="h3 mb-0 pb-1">Esqueci minha senha </h1>
				<p class="text-center pb-4">Digite seu email no campo abaixo para recuperar sua senha</p>
				<form action="" method="post">
					<label>
						<input type="text" value="" placeholder="Inserir email">
					</label>				
					</label>							
					<input type="submit" value="Enviar" class="btn">
				</form>
			</div>
			</div>
		</div>
</div>
		<script src="js/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/9480317a2f.js"></script>
		<script src="js/js.js"></script>	
</body>
</html>