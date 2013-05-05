<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
	<?php
		echo $this->Meta->meta();
		echo $this->Layout->feed();
		echo $this->Html->css(array(
			'/css/bootstrap',
			'/css/bootstrap-responsive',
			'/css/theme',
		));
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
    <?php      
		echo $this->Layout->js();
		echo $this->Html->script(array(
			'/js/bootstrap',
		));
		echo $this->Blocks->get('css');
		echo $this->Blocks->get('script');
	?>

</head>
<body>
	<?php echo $this->element('header'); ?>	
	
	<div class="container">
		<div id="main" class="row-fluid">
			<div id="content" class="span9">
			<?php
				echo $this->Layout->sessionFlash();
				echo $content_for_layout;
			?>
			</div>

			<div id="sidebar" class="span3">
			<?php echo $this->Regions->blocks('right'); ?>
			</div>
		</div>

		<div id="footer">
			<div class="row-fluid">
				<div class="pull-left">
					Powered by <a href="http://www.croogo.org">Croogo</a>.
				</div>
				<div class="pull-right">
					<a href="http://www.cakephp.org"><?php echo $this->Html->image('/img/cake.power.gif'); ?></a>
				</div>
			</div>
		</div>
	</div>
	<?php
		echo $this->Blocks->get('scriptBottom');
		echo $this->Js->writeBuffer();
	?>
	</body>
</html>