<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'Coches Plus');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		// Bootstrap core CSS
	    echo $this->Html->css('bootstrap.min.css');

	    //Custom styles for this template
	    echo $this->Html->css('styles/navbar.css');
	    echo $this->Html->css('font-awesome/css/font-awesome.min.css');
	    echo $this->Html->css('standar/standar.css');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div class="container">
     <?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>

		<!-- Site footer -->
		<footer class="footer">
			<p>&copy; <span class="text-danger"> - Todos los derechos reservados.</p>
		</footer>

	</div> <!-- /container -->

  <?php
  // jQuery (necessary for Bootstrap's JavaScript plugins)
  echo $this->Html->script('jquery.js');

  // Include all compiled plugins (below), or include individual files as needed -->
  echo $this->Html->script('bootstrap.min.js');
  ?>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
