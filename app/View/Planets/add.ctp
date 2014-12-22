<div class="planets form">
<?php echo $this->Form->create('Planet'); ?>
	<fieldset>
		<legend><?php echo __('Add Planet'); ?></legend>
	<?php
                $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('inline' => false));
                $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('inline' => false));
                $this->Html->script('View/Cars/index', array('inline' => false));
                
		echo $this->Form->input('name', array('class' => 'ui-autocomplete','id' => 'autocomplete'));
		echo $this->Form->input('info');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Planets'), array('action' => 'index','language' => $this->params['language'])); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shippings'), array('controller' => 'shippings', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping'), array('controller' => 'shippings', 'action' => 'add','language' => $this->params['language'])); ?> </li>
	</ul>
</div>
