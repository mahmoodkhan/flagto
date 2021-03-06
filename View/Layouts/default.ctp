<?php
/**
 *
 * PHP 5
 *
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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', '');
?>
<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41877534-1', 'flagto.com');
  ga('send', 'pageview');

</script>

</head>
<body>
		<div id="logo" class="container">
			<?php echo $this->Html->link(
					$this->Html->image('flagtologo.png', array('alt' => $cakeDescription, 'border' => '0')),
					'/',
					array('target' => '', 'escape' => false)
				);
			?>
</div>

<div id="menu-wrapper">
	<div id="menu" class="container">
		<ul>
			<li><a href="/users/add/">Signup</a></li>
			<li><a href="/users/login/">Login</a></li>
			<li><a href="/users/index/">List</a></li>
			<li><a href="/pages/about/">About Flagto!</a></li>
			<li><a href="/pages/contact/">Contact Us</a></li>
			<li><a href="/users/logout/">Logout</a></li>
		</ul>
	</div>
</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
				<p>Copyright 2013 FlagTo.com</p>

		</div>
	</div>
	<!--<?php echo $this->element('sql_dump'); ?> -->
</body>
</html>


