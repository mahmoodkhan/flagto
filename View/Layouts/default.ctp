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
</head>
<body>
		<div id="logo" class="container">
			<?php echo $this->Html->link(
					$this->Html->image('flagtologo.png', array('alt' => $cakeDescription, 'border' => '0')),
					'http://flagto/',
					array('target' => '', 'escape' => false)
				);
			?>
</div>

<div id="menu-wrapper">
	<div id="menu" class="container">
		<ul>
			<li><a href="http://flagto/users/add/">Signup</a></li>
			<li><a href="http://flagto/users/login/">Login</a></li>
			<li><a href="http://flagto/users/index/">List</a></li>
			<li><a href="http://flagto/pages/about/">About Flagto!</a></li>
			<li><a href="http://flagto/pages/contact/">Contact Us</a></li>
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


