<html>
<head>
<meta charset="utf-8">
<title>mjailton agendamento</title>
	<meta name="viewport" content="width=device-width, initial-scale =1">	
	<link rel="stylesheet" type="text/css" href="assets/css/auxiliar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/grade.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="shortcut icon" href="assets\img\icon.png">
</head>

<body>    
<div class="conteudo">
<div class="base-topo">
	<a href="index.php?link=1"><img src="assets/img/logo2.png"  class="logo"></a>
	<a href="" class="mobmenu alt"><i class="fas fa-bars"></i></a>		
    <div class="menu">	
		<ul>
			<li><a href="index.php">Início</span></a></li>
			<li><a href="frm_agendamento.php">Novo Pedido</a></li>
		<!--<li><a href="lst_medico.html">Médicos</a></li>
			<li><a href="lst_especialidade.html">Especialidades</a></li>
			<li><a href="medico_especialidade.html">Médico especialidades</a></li>			                       
			<li class="ativo"><a href="agenda.html">Agendas do Médico</a></li>	-->
            <li><a href=""> Sair <i class="fas fa-sign-out-alt"></i></a></li>
		</ul>		
	</div>
</div>
	
       
 <div class="base-home">
    <div class="base-listas">
        <div class="caixa p-2">
        <span class="titulo"><i class="fas fa-users text-verde h4 mb-0"></i> Lista de entregas </span>
			<div class="base-form">
            <form id="frmMedicoEspecialidade" >
				<div class="bg-padrao p-2 radius-4 mb-3">
				<!-- Inserir aqui o formlario-->
				<div class="rows">
					<div class="col-3 mb-2">
						<span class="text-label">Data início</span>
						<input type="date" value="" class="form-campo">			 
					</div>
					<div class="col-3 mb-2">
						<span class="text-label">Data final</span>
						<input type="date" value="" class="form-campo">			 
					</div>
					<div class="col-4 mb-2">
						<span class="text-label">Setor</span>
						<select  id="medico" size="0" class="form-campo">
							<option>Setor 1 </option>
							<option>Setor 2 </option>
							<option>Setor 3 </option>
							<option>Setor 4 </option>
						</select>			 
					</div>
					<div class="col-2 mt-3">
						<input type="submit" name="" value="Buscar" class="btn btn-verde width-100">
					</div>
				</div>
			</div>					
            </form>
        </div>
           
            <table id="dataTable" width="100%" cellpadding="0" cellspacing="0">			

                <thead>
                    <tr>
                        <th width="15%" align="center">Data:</th>
                        <th width="35%" align="center">Morador:</th>
                        <th width="15%" align="center">Setor:</th>				
                        <th width="15%" align="center">Intermediador</th>				
                        <th width="5%" align="center">Status</th>
                <!--       <th width="5%" align="center">Conf</th> -->
                <!--        <th align="center">Clientes</th> -->
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td align="center">10/10/2010</td>
                        <td align="center">Manoel Jailton</td>
                        <td align="center">Setor 1</td>
                        <td align="center">Vereador Tal</td>					
                        <td align="center">Entregue</td>
                <!--        <td align="center">20</td> -->
                <!--        <td align="center"><a href="detalhe.html" class="btn btn-verde">Clientes</a></td> -->
                    </tr>                                                   
                    
                </tbody>

            </table>
       
        </div>

    </div>
</div>

      </div>
	  
		<script src="js/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://kit.fontawesome.com/9480317a2f.js"></script>	
		<script src="js/js.js"></script>	
		
</body>
</html>