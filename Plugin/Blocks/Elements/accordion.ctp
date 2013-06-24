<?php
$this->set(compact('block'));
$b = $block['Block'];
$class = 'block block-' . $b['alias'];
if ($block['Block']['class'] != null) {
	$class .= ' ' . $b['class'];
}
?>

<div class="accordion-group">
	<div class="accordion-heading">
		<a class="accordion-toggle" data-toggle="collapse" data-parent="#theme_accordion" href="#block-<?php echo $b['id']; ?>">
			<?php echo $b['title']; ?>
		</a>
	</div>
	<div id="block-<?php echo $b['id']; ?>" class="accordion-body collapse <?php echo $class; ?>">
		<div class="accordion-inner">
			<?php echo $this->Layout->filter($b['body']); ?>
		</div>
	</div>
</div>
