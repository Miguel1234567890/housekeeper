<div class="hotels form">
<?php echo $this->Form->create('Hotel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('legal_name');
		echo $this->Form->input('business_name');
		echo $this->Form->input('country');
		echo $this->Form->input('state');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hotel.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Hotel.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
