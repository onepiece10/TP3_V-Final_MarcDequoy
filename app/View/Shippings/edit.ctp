<div class="shippings form">
<?php echo $this->Form->create('Shipping'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shipping'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('planet_id');
		echo $this->Form->input('Product');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Shipping.id'),'language' => $this->params['language']), null, __('Are you sure you want to delete # %s?', $this->Form->value('Shipping.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shippings'), array('action' => 'index','language' => $this->params['language'])); ?></li>
		<li><?php echo $this->Html->link(__('List Planets'), array('controller' => 'planets', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Planet'), array('controller' => 'planets', 'action' => 'add','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add','language' => $this->params['language'])); ?> </li>
	</ul>
</div>
