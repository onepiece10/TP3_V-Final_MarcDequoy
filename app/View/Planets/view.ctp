<div class="planets view">
<h2><?php echo __('Planet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($planet['Planet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($planet['Planet']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info'); ?></dt>
		<dd>
			<?php echo h($planet['Planet']['info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($planet['User']['name'], array('controller' => 'users', 'action' => 'view', $planet['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Planet'), array('action' => 'edit', $planet['Planet']['id'],'language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Planet'), array('action' => 'delete', 'language' => $this->params['language'], $planet['Planet']['id']), null, __('Are you sure you want to delete # %s?', $planet['Planet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Planets'), array('action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Planet'), array('action' => 'add','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shippings'), array('controller' => 'shippings', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping'), array('controller' => 'shippings', 'action' => 'add','language' => $this->params['language'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Shippings'); ?></h3>
	<?php if (!empty($planet['Shipping'])): ?>
	<table cellpadding = "10" cellspacing = "5" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Planet Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($planet['Shipping'] as $shipping): ?>
		<tr>
			<td><?php echo $shipping['id']; ?></td>
			<td><?php echo $shipping['date']; ?></td>
			<td><?php echo $shipping['name']; ?></td>
			<td><?php echo $shipping['address']; ?></td>
			<td><?php echo $shipping['planet_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shippings', 'action' => 'view', $shipping['id'],'language' => $this->params['language'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shippings', 'action' => 'edit', $shipping['id'],'language' => $this->params['language'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shippings', 'action' => 'delete', $shipping['id'],'language' => $this->params['language']), null, __('Are you sure you want to delete # %s?', $shipping['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shipping'), array('controller' => 'shippings', 'action' => 'add','language' => $this->params['language'])); ?> </li>
		</ul>
	</div>
</div>
