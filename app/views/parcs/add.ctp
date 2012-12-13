<div class="parcs form">
<?php echo $this->Form->create('Parc');?>
	<fieldset>
		<legend><?php __('Add Parc'); ?></legend>
	<?php
		echo $this->Form->input('numeroparc');
		echo $this->Form->input('ville');
		echo $this->Form->input('tel');
		echo $this->Form->input('ovehicules_id');
		echo $this->Form->input('nvehicules_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Parcs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ovehicules', true), array('controller' => 'ovehicules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ovehicules', true), array('controller' => 'ovehicules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nvehicules', true), array('controller' => 'nvehicules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nvehicules', true), array('controller' => 'nvehicules', 'action' => 'add')); ?> </li>
	</ul>
</div>