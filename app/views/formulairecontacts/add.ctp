<div class="formulairecontacts form">
<?php echo $this->Form->create('Formulairecontact');?>
	<fieldset>
		<legend><?php __('Add Formulairecontact'); ?></legend>
	<?php
		echo $this->Form->input('departemnt');
		echo $this->Form->input('titre');
		echo $this->Form->input('prenom');
		echo $this->Form->input('nom');
		echo $this->Form->input('adresse');
		echo $this->Form->input('ville');
		echo $this->Form->input('mail');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Formulairecontacts', true), array('action' => 'index'));?></li>
	</ul>
</div>