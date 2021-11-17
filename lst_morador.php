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
		<div class="titulo d-flex justify-content-space-between center-middle">
			<span><i class="fas fa-users text-verde h4 mb-0"></i> Lista de moradores</span>
			<div>
				<a href="frm_morador.php" class="btn py-1 btn-verde btn-pequeno d-inline-block"><i class="fas fa-plus-circle"></i> Cadastrar morador</a>
				<a href="" class="btn btn-pequeno py-1 btn-laranja filtro d-inline-block"><i class="fas fa-filter"></i> Filtro</a>
			</div>
		</div>
	
	<div class="bg-padrao mostraFiltro p-2 radius-4 mb-3">
		<!-- Inserir aqui o formlario-->
		<div class="rows">
			<div class="col-6 mb-2">
				<span class="text-label">Nome</span>
				<input type="text" name="" value="" placeholder="Digite o nome" class="form-campo">
			</div>
			<div class="col-6 mb-2">
				<span class="text-label">Email</span>
				<input type="text" name="" value="" placeholder="Digite o email" class="form-campo">
			</div>	
			<div class="col-4 mb-2">
				<span class="text-label">select</span>
				<select class="form-campo">
					<option>valor 1</option>
					<option>valor 1</option>
				</select>
			</div>
			<div class="col-2 mb-2">
				<span class="text-label">Marcar</span>
				<input type="radio" name="seleciona" value="sim" id="sim"> <label for="sim" class="text-branco">sim </label>
				<input type="radio" name="seleciona" value="nao" id="nao"> <label for="nao" class="text-branco">nao </label> 
			</div>
			<div class="col-4 mb-2">
				<span class="text-label">Valor</span>
				<input type="number" name="" value="" placeholder="Digite o email" class="form-campo">
			</div>
			<div class="col-2 mt-3">
				<input type="submit" name="" value="Buscar" class="btn btn-verde width-100">
			</div>
		</div>
	</div>
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
				
	<table id="dataTable" width="100%" cellpadding="0" cellspacing="0">		
			
		<thead>
			<tr>
				<th class="text-center">Nome:</th>
				<th width="60%">Email:</th>
				<th class="text-center">Editar</th>
		<!--		<th class="text-center">Excluir</th> -->
			</tr>
		</thead>
		<tbody>				 
		<tr>
			<td class="text-center">1</td>
			<td  class="text-center">mjailton@gmail.com</td>
			<td class="text-center"><a href="frm_morador.php" class="btn btn-outline-verde">Editar</a></td>
	<!--		<td class="text-center"><a href="frm_morador.php" class="btn btn-outline-vermelho">Excluir</a></td> -->
		</tr>			 
		<tr>
			<td class="text-center">1</td>
			<td  class="text-center">mjailton@gmail.com</td>
			<td class="text-center"><a href="frm_morador.php" class="btn btn-outline-verde">Editar</a></td>
	<!--		<td class="text-center"><a href="frm_morador.php" class="btn btn-outline-vermelho">Excluir</a></td> -->
		</tr>			 
		<tr>
			<td class="text-center">1</td>
			<td  class="text-center">mjailton@gmail.com</td>
			<td class="text-center"><a href="frm_morador.php" class="btn btn-outline-verde">Editar</a></td>
	<!--		<td class="text-center"><a href="frm_morador.php" class="btn btn-outline-vermelho">Excluir</a></td> -->
		</tr>			 
		<tr>
			<td class="text-center">1</td>
			<td  class="text-center">mjailton@gmail.com</td>
			<td class="text-center"><a href="frm_morador.php" class="btn btn-outline-verde">Editar</a></td>
	<!--		<td class="text-center"><a href="frm_morador.php" class="btn btn-outline-vermelho">Excluir</a></td> -->
		</tr>		
														 
	   </tbody>

	</table>
					
					
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