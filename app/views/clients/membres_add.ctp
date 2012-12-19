<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php __('Nouveau Client'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('raisonsociale');
		echo $this->Form->input('ville');
		echo $this->Form->input('tel');
		echo $this->Form->input('nvehicules_id', array('label'=>'Id du véhicule'));
		echo $this->Form->input('nego', array('label'=>'Négociations clôturées '));
		echo $this->Form->input('note', array('label'=>'Commentaire'));



	?>
	</fieldset>
<?php echo $this->Form->end(__('Enregistrer', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Liste client', true), array('action' => 'index'));?></li>
	</ul>
</div>ions