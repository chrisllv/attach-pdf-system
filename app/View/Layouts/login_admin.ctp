<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="GeeksLabs">
    <link rel="shortcut icon" href="img/panel/favicon.png">
    <?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Login Administrador"; ?>
	</title>
    <?php
    // Bootstrap CSS -->
    echo $this->Html->css('panel/bootstrap.min.css');

    // bootstrap theme -->
    echo $this->Html->css('panel/bootstrap-theme.css');

    //external css-->
    // font icon -->
    echo $this->Html->css('panel/elegant-icons-style.css');
    echo $this->Html->css('panel/font-awesome.css');

    // Custom styles -->
    echo $this->Html->css('panel/style.css');
    echo $this->Html->css('panel/style-responsive.css');
     ?>
<script type="text/javascript">
   function focus_usuario(){
       if(document.getElementById('UsuarioUsername')){
       	  document.getElementById('UsuarioUsername').focus();
       }
    }
</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

 <body class="login-img3-body" onload="focus_usuario();">
    <div class="container">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
    </div>
  </body>
</html>