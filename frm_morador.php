<html>
<head>
<meta charset="utf-8">
<title>mjailton agendamento</title>
	<meta name="viewport" content="width=device-width, initial-scale =1">	
	<link rel="stylesheet" type="text/css" href="assets/css/auxiliar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/grade.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>    
<div class="conteudo">
<div class="base-topo">
	<a href="index.php?link=1"><img src="assets/img/logo2.png"  class="logo"></a>
	<a href="" class="mobmenu alt"><i class="fas fa-bars"></i></a>		
    <div class="menu">	
		<ul>
		<li><a href="index.php">Início</span></a></li>
			<li><a href="lst_morador.php">Moradores</a></li>
			<li><a href="lst_medico.html">Intermediadores</a></li>
			<li><a href="lst_especialidade.html">Usuários</a></li>
	<!--		<li><a href="medico_especialidade.html">Médico especialidades</a></li>	-->		                       
	<!--		<li class="ativo"><a href="agenda.html">Agendas do Médico</a></li>	-->
            <li><a href=""> Sair <i class="fas fa-sign-out-alt"></i></li>
		</ul>		
	</div>
</div>
	<div class="base-home">
	<div class="base-listas">
		<div class="caixa p-2">		
		<span class="titulo p-1"><i class="fas fa-users text-verde h4 mb-0"></i> Meu Perfil</span>
		<div class="base-form">		
<div>
			<!--mensagem de erro-->
			<div class="col-12 mt-1 px-0">
				<div class="msg erro">
					<i class="fas fa-exclamation-triangle"></i> Não foi possível gerar o xml
					<a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a>
				</div>
			</div>
			<!--mensagem de parabéns-->
			<div class="col-12 mt-1 px-0">
				<div class="msg sucesso">
					<i class="fas fa-check-circle"></i> Parabéns nota gerada com sucesso
					<a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a>
				</div>
			</div>
			<!--mensagem de atenção-->
			<div class="col-12 mt-1 px-0">
				<div class="msg alerta">
					<i class="fas fa-exclamation-triangle"></i> Atenção você não marcou a opção tal..
					<a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a>
				</div>
			</div>
		</div>		
			<form action="" method="post">
			<span class="titulo2">Dados pessoais</span>
			<div class="rows">
				<div class="col-12 mb-2">
					 <span class="text-label">Nome</span>
					<input type="text" name="paciente" class="form-campo">					
				</div>
				<div class="col-4 mb-2">
					 <span class="text-label">CEP</span>
					<input type="text" name="cep" class="form-campo">
				</div>
				
				<div class="col-8 mb-2">
					 <span class="text-label">Bairro</span>
					<input type="text" name="bairro" class="form-campo">
				</div>
				
				<div class="col-6 mb-2">
					 <span class="text-label">Endereço</span>
					<input type="text" name="endereco" class="form-campo">
				</div>				
				<div class="col-6 mb-2">
					 <span class="text-label">Cidade</span>
					<input type="text" name="cidade" class="form-campo">
				</div>		
				<div class="col-4 mb-2">
					 <span class="text-label">Estado</span>
					<select name="uf" class="form-campo">
						<option class="form-campo">Selecione o Estado</option> 
					  <option value="AC" >Acre</option> 
						<option value="AL">Alagoas</option> 
						<option value="AM">Amazonas</option> 
						<option value="AP">Amapá</option> 
						<option value="BA">Bahia</option> 
						<option value="CE">Ceará</option> 
						<option value="DF">Distrito Federal</option> 
						<option value="ES">Espírito Santo</option> 
						<option value="GO">Goiás</option> 
						<option value="MA">Maranhão</option> 
						<option value="MT">Mato Grosso</option> 
						<option value="MS">Mato Grosso do Sul</option> 
						<option value="MG">Minas Gerais</option> 
						<option value="PA">Pará</option> 
						<option value="PB">Paraíba</option> 
						<option value="PR">Paraná</option> 
						<option value="PE">Pernambuco</option> 
						<option value="PI">Piauí</option> 
						<option value="RJ">Rio de Janeiro</option> 
						<option value="RN">Rio Grande do Norte</option> 
						<option value="RO">Rondônia</option> 
						<option value="RS">Rio Grande do Sul</option> 
						<option value="RR">Roraima</option> 
						<option value="SC">Santa Catarina</option> 
						<option value="SE">Sergipe</option> 
						<option value="SP">São Paulo</option> 
						<option value="TO">Tocantins</option> 	
					</select>
				</div>               
				
				<div class="col-4 mb-2">
					 <span class="text-label">Sexo</span> 
					<select name="sexo" class="form-campo">
						<option class="form-campo">Selecione o Sexo</option> 
						<option value="Masculino" >Masculino</option> 
						<option value="Feminino" >Feminino</option> 
						<option value="Outro"    >Outro</option>                     	
					</select>
				</div>		
				<div class="col-4 mb-2">
					 <span class="text-label">CPF</span>
					<input type="text" name="cpf" class="form-campo">
				</div>
				
			   <div class="col-6 mb-2">
					 <span class="text-label">RG</span>
					<input type="text" name="rg" class="form-campo">
				</div>
				<div class="col-2 mb-2">
					 <span class="text-label">DDD</span>
					<input type="text" name="ddd" class="form-campo">
				</div>
				<div class="col-4 mb-2">
					 <span class="text-label">Celular</span>
					<input type="text" name="celular" class="form-campo">
				</div>
				
				<div class="col-6 mb-2">
					 <span class="text-label">Data Nascimento</span>
					<input type="date" name="data_nascimento" class="form-campo">
				</div>
					
				<div class="col-6 mb-2">
					 <span class="text-label">Data Cadastro</span>
					<input type="date" name="data_cadastro" class="form-campo">
				</div>
			</div>
			
			<span class="titulo2 mt-4">Dados de acesso</span>
			<div class="rows">
				<div class="col-6 mb-2">
					 <span class="text-label">Email</span>
					<input type="text" name="email" class="form-campo">
				</div>
				<div class="col-6">
					 <span class="text-label">Senha</span>
					<input type="password" name="senha" class="form-campo">
				</div>	
				<div class="col-12 mt-3 mb-3">
					<input type="submit" name="logar" id="logar" value="cadastrar" class="btn btn-verde d-block m-auto">
				</div>
			</div>
                        
                        
		</form>
		</div>
		</div>
	</div>
</div>


</div>
	  
 <!--font icones-->
		<script src="js/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://kit.fontawesome.com/9480317a2f.js"></script>	
		<script src="js/js.js"></script>	
		
</body>
</html>