<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('price');
		echo $this->Form->input('description');
		echo $this->Form->input('Shipping');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id'),'language' => $this->params['language']), null, __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index','language' => $this->params['language'])); ?></li>
		<li><?php echo $this->Html->link(__('List Shippings'), array('controller' => 'shippings', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping'), array('controller' => 'shippings', 'action' => 'add','language' => $this->params['language'])); ?> </li>
	</ul>
</div>
