<html>
<link rel="shortcut icon" href="assets\img\icon.png">
<head>
<meta charset="utf-8">
<title>SIMECAP</title>
<meta name="viewport" content="width=device-width, initial-scale =1">	
	<link rel="stylesheet" type="text/css" href="assets/css/auxiliar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/grade.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo-tabela.css">
	<link rel="shortcut icon" href="assets\img\icon.png">

<body>

<div class="conteudo">
<div class="base-topo">
	<a href="index.php?link=1"><img src="assets/img/logo2.png"  class="logo"></a>
	<a href="" class="mobmenu alt"><i class="fas fa-bars"></i></a>		
    <div class="menu">	
		<ul>
			<li><a href="index.php">Início</span></a></li>
			<li><a href="lst_entrega.php">Lista de Pedido</a></li>
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
        <span class="titulo1"><a name="consulta"></a>&nbsp; Cadastro de Pedidos</span>
        <div class="caixa">
            <div class="base-form">
                <form action="" method="post">
                    <div>
						<label class="col6">
							<span>Nome Médico</span>
							<select name="id_medico"> 
								<option value="0">Selecione o Medico</option> 
								   <option value ='1' >Jailton</option>";
								
							</select>
						</label>                
						<label class="col6">
							<span>Turno</span>
							<select name="turno"> 
								<option value="0">Selecione o Turno</option> 
								<option value="matutino">Matutino</option> 
								<option value="vespertino">Vespertino</option> 
								<option value="noturno">Noturno</option> 
							</select>
						</label> 
					</div>
					<div>
						<label class="col6">
							<span>Data</span>
							<input type="date" name="data" value="">
						</label> 

						<label class="col6">
							<span>Limite Pacientes</span>
							<input type="text" name="limite" value="30">
						</label>
					</div>

                   <div class="col6 center"><input type="submit" name="logar" id="logar" value="cadastrar" class="but"></div>



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