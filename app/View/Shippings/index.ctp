<div class="shippings index">
	<h2><?php echo __('Shippings'); ?></h2>
	<table cellpadding = "10" cellspacing = "5" class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('planet_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($shippings as $shipping): ?>
	<tr>
		<td><?php echo h($shipping['Shipping']['id']); ?>&nbsp;</td>
		<td><?php echo h($shipping['Shipping']['date']); ?>&nbsp;</td>
		<td><?php echo h($shipping['Shipping']['name']); ?>&nbsp;</td>
		<td><?php echo h($shipping['Shipping']['address']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($shipping['Planet']['name'], array('controller' => 'planets', 'action' => 'view', 'language' => $this->params['language'], $shipping['Planet']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', 'language' => $this->params['language'], $shipping['Shipping']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', 'language' => $this->params['language'], $shipping['Shipping']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', 'language' => $this->params['language'], $shipping['Shipping']['id']), null, __('Are you sure you want to delete # %s?', $shipping['Shipping']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Shipping'), array('action' => 'add', 'language' => $this->params['language'])); ?></li>
		<li><?php echo $this->Html->link(__('List Planets'), array('controller' => 'planets', 'action' => 'index', 'language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Planet'), array('controller' => 'planets', 'action' => 'add', 'language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index', 'language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add', 'language' => $this->params['language'])); ?> </li>
	</ul>
</div>
