<div class="ovehicules form">
	<?php echo $form->create('Ovehicule',array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Nouveau véhicule'); ?></legend>
	<?php
		echo $this->Form->input('parcs_id');
		echo $this->Form->input('marque');
		echo $this->Form->input('annee');
		echo $this->Form->input('model');
		echo $this->Form->input('carrosserie');
		echo $this->Form->input('puissance');
		echo $this->Form->input('couleur');
		echo $this->Form->input('finission');
		echo $this->Form->input('circulation');
		echo $this->Form->input('prix');
		echo $this->Form->input('boite');
		echo $this->Form->input('motorisation');
		echo $this->Form->input('kilometrage');
		echo $this->Form->input('infoptions');
		echo $this->Form->input('commentaire');
		echo $form->input('filename', array('type' => 'file'));

	?>

	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ovehicules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>