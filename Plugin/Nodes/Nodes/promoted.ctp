<div class="nodes promoted">
	<?php
		if (count($nodes) == 0) {
			echo __('No items found.');
		}
	?>

	<?php
		foreach ($nodes as $node):
			$this->Nodes->set($node);
	?>
	<div id="node-<?php echo $this->Nodes->field('id'); ?>" class="node node-type-<?php echo $this->Nodes->field('type'); ?>">
		<h2><?php echo $this->Html->link($this->Nodes->field('title'), $this->Nodes->field('url')); ?></h2>
		<?php
			echo $this->Nodes->info();
			echo $this->Nodes->body();
			echo $this->Nodes->moreInfo();
		?>
	</div>
	<?php
		endforeach;
	?>

	<div class="pagination">
	<ul>
	<?php
		echo $this->Paginator->first('< first');
		echo $this->Paginator->prev('< prev');
		echo $this->Paginator->numbers();
		echo $this->Paginator->next('next >');
		echo $this->Paginator->last('last >');
	?>
	</ul>
	</div>
</div>