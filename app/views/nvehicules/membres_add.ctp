<div class="nvehicules form">
	<?php echo $form->create('Nvehicule',array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Nouveau véhicule'); ?></legend>
	<?php
		echo $this->Form->input('parcs_id');
		echo $this->Form->input('marque');
		echo $this->Form->input('model');
		echo $this->Form->input('carrosserie');
		echo $this->Form->input('puissance');
		echo $this->Form->input('couleur');
		echo $this->Form->input('finission');
		echo $this->Form->input('prix');
		echo $this->Form->input('boite');
		echo $this->Form->input('motorisation');
		echo $this->Form->input('commentaire');
		echo $form->input('filename', array('type' => 'file'));

	?>

	</fieldset>
<?php echo $this->Form->end(__('Enregistrer', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Liste Nouveaux véhicules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Liste clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
	</ul>
</div>