<div class="clientvos form">
<?php echo $this->Form->create('Clientvo');?>
	<fieldset>
		<legend><?php __('Add Clientvo'); ?></legend>
	<?php
		echo $this->Form->input('numeroclient');
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('raisonsociale');
		echo $this->Form->input('ville');
		echo $this->Form->input('tel');
		echo $this->Form->input('ovehicules_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clientvos', true), array('action' => 'index'));?></li>
	</ul>
</div>