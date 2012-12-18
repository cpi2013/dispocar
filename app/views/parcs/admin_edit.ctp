<div class="parcs form">
<?php echo $this->Form->create('Parc');?>
	<fieldset>
		<legend><?php __('Edit Parc'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numeroparc');
		echo $this->Form->input('ville');
		echo $this->Form->input('tel');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Parc.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Parc.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parcs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ovehicules', true), array('controller' => 'ovehicules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ovehicules', true), array('controller' => 'ovehicules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nvehicules', true), array('controller' => 'nvehicules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nvehicules', true), array('controller' => 'nvehicules', 'action' => 'add')); ?> </li>
	</ul>
</div>