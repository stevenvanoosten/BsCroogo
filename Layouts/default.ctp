<?php
// Adjusting content width
if ($this->Regions->blocks('left') and $this->Regions->blocks('right')) {
	$span = "span6";
}
elseif ($this->Regions->blocks('left') xor $this->Regions->blocks('right')) {
	$span = "span9";
}
else {
	$span = "span12";
}
?>

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
			echo $this->Blocks->get('css');
	    ?>
	
	</head>
	<body>
		<div id="wrap">
			<?php echo $this->element('header'); ?>
			
			<div class="container">
				<div class="row-fluid">
					<?php if ($this->Regions->blocks('left')): ?>
						<div class="span3">
							<?php echo $this->Regions->blocks('left'); ?>
						</div>
					<?php endif; ?>
		
					<div class="<?php echo $span; ?>">
					<?php
						echo $this->Layout->sessionFlash();
						echo $content_for_layout;
					?>
					</div>
					
					<?php if ($this->Regions->blocks('right')): ?>
						<div class="span3">
							<?php echo $this->Regions->blocks('right'); ?>
							<?php echo $this->element('accordion'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div id="push"></div>
		</div>
	
		<div id="footer">
			<div class="container">
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
		
		<!-- Js placed at the end of the document so the pages load faster -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
	    <?php      
			echo $this->Layout->js();
			echo $this->Html->script(array(
				'/js/bootstrap',
			));			
			echo $this->Blocks->get('script');
			echo $this->Blocks->get('scriptBottom');
			echo $this->Js->writeBuffer();
		?>
	</body>
</html>