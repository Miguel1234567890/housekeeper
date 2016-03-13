<div class="typejobs form">
<?php echo $this->Form->create('Typejob'); ?>
	<fieldset>
		<legend><?php echo __('Add Typejob'); ?></legend>
	<?php
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Typejobs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typejob'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
