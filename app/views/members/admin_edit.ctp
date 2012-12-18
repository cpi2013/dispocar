<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('parcs_id');
		echo $this->Form->input('numero');
		echo $this->Form->input('ville');
		echo $this->Form->input('tel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Member.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Member.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Parcs', true), array('controller' => 'parcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parcs', true), array('controller' => 'parcs', 'action' => 'add')); ?> </li>
	</ul>
</div>