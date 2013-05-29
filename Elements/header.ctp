<header class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="brand" href="#"><?php echo Configure::read('Site.title'); ?></a>
			<div class="nav-collapse collapse">
				<?php echo $this->Custom->menu('main', array('dropdown' => true)); ?>
			</div>
		</div>
	</div>
</header>