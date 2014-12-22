<div class="planets index">
	<h2><?php echo __('Planets'); ?></h2>
	<table cellpadding = "10" cellspacing = "5" class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('info'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($planets as $planet): ?>
	<tr>
		<td><?php echo h($planet['Planet']['id']); ?>&nbsp;</td>
		<td><?php echo h($planet['Planet']['name']); ?>&nbsp;</td>
		<td><?php echo h($planet['Planet']['info']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($planet['User']['name'], array('controller' => 'users', 'action' => 'view', $planet['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', 'language' => $this->params['language'], $planet['Planet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', 'language' => $this->params['language'], $planet['Planet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', 'language' => $this->params['language'], $planet['Planet']['id']), null, __('Are you sure you want to delete # %s?', $planet['Planet']['id'])); ?> 
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
		<li><?php echo $this->Html->link(__('New Planet'), array('action' => 'add', 'language' => $this->params['language'])); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index', 'language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add', 'language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shippings'), array('controller' => 'shippings', 'action' => 'index', 'language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping'), array('controller' => 'shippings', 'action' => 'add', 'language' => $this->params['language'])); ?> </li>
	</ul>
</div>
