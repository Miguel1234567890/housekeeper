<div class="typejobs view">
<h2><?php echo __('Typejob'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typejob['Typejob']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($typejob['Typejob']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Typejob'), array('action' => 'edit', $typejob['Typejob']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Typejob'), array('action' => 'delete', $typejob['Typejob']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $typejob['Typejob']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Typejobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typejob'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typejob'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Jobs'); ?></h3>
	<?php if (!empty($typejob['typejob'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date Start'); ?></th>
		<th><?php echo __('Date End'); ?></th>
		<th><?php echo __('Priority'); ?></th>
		<th><?php echo __('Typejobs Id'); ?></th>
		<th><?php echo __('Hotel Id'); ?></th>
		<th><?php echo __('Users Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($typejob['typejob'] as $typejob): ?>
		<tr>
			<td><?php echo $typejob['id']; ?></td>
			<td><?php echo $typejob['description']; ?></td>
			<td><?php echo $typejob['date_start']; ?></td>
			<td><?php echo $typejob['date_end']; ?></td>
			<td><?php echo $typejob['priority']; ?></td>
			<td><?php echo $typejob['typejobs_id']; ?></td>
			<td><?php echo $typejob['hotel_id']; ?></td>
			<td><?php echo $typejob['users_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobs', 'action' => 'view', $typejob['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobs', 'action' => 'edit', $typejob['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobs', 'action' => 'delete', $typejob['id']), array('confirm' => __('Are you sure you want to delete # %s?', $typejob['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Typejob'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
