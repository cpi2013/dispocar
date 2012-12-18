<div class="clientvos form">
<?php echo $this->Form->create('Clientvo');?>
	<fieldset>
		<legend><?php __('Edit Clientvo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numeroclient');
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('raisonsociale');
		echo $this->Form->input('ville');
		echo $this->Form->input('tel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Clientvo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Clientvo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientvos', true), array('action' => 'index'));?></li>
	</ul>
</div>