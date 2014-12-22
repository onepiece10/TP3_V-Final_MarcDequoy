<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'],'language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id'],'language' => $this->params['language']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shippings'), array('controller' => 'shippings', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping'), array('controller' => 'shippings', 'action' => 'add','language' => $this->params['language'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Shippings'); ?></h3>
	<?php if (!empty($product['Shipping'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Planet Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Shipping'] as $shipping): ?>
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
