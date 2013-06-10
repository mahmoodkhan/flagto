
<div id="page" class="container">
	<div id="box1">
		<h2 class="title"><a>Contact us</a></h2>
		<div class="entry">
			<p>
				<ul>
					<li>Email us: info@flagto.com</li>
					<li>Call us: 503 569 4227</li>
					<li>Come visit us: !000AAAA</li>
				</ul>
			</p>
		</div>
	</div>
	<div id="box2">
			
			<?php echo $this->Html->link(
					$this->Html->image('signup.png', array('alt' => 'Sign Up', 'border' => '0')),
					'/users/add/',
					array('target' => '', 'escape' => false)
				);
			?>
			</div>
</div>

