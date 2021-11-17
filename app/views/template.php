<html>
<head>
<meta charset="utf-8">
<title>SIMECAP</title>
    <meta name="viewport" content="width=device-width, initial-scale =1">   
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE?>assets/css/auxiliar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE?>assets/css/grade.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE?>assets/css/style.css">
</head>

<body>    
<div class="conteudo">
<?php include_once 'cabecalho.php'?>
    
   <div class="base-home">
    <div class="bemvindo">
        <section class="rows">
            <?php $this->load($view, $viewData)?>
        </section>
    </div>
</div>
</div>

    <!--font icones-->
        <script src="<?php echo URL_BASE?>assets/js/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://kit.fontawesome.com/9480317a2f.js"></script>   
        <script src="<?php echo URL_BASE?>assets/js/js.js"></script>    
        
</body>
</html>