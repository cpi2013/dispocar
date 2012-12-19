﻿<div class="nvehicules form">
<?php echo $this->Form->create('Nvehicule');?>
	<fieldset>
		<legend><?php __('Editer'); ?></legend>
	<?php
		echo $this->Form->input('parcs_id', array('label'=>'Id du parc auquel appartient le véhicule '));
		echo $this->Form->input('id');
		echo $this->Form->input('marque');
		echo $this->Form->input('model');
		echo $this->Form->input('carrosserie');
		echo $this->Form->input('puissance');
		echo $this->Form->input('couleur');
		echo $this->Form->input('finission');
		echo $this->Form->input('commentaire');
		echo $this->Form->input('prix');
		echo $this->Form->input('boite');
		echo $this->Form->input('motorisation');
		echo $this->Form->input('envente', array('label'=>'Hors vente '));
		echo $this->Form->input('entransfert', array('label'=>'En transfert '));
		echo $this->Form->input('vendu', array('label'=>'Vente close '));
		echo $form->input('filename', array('type' => 'file','label'=>'Inclure une nouvelle image'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enregistrer', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $this->Form->value('Nvehicule.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Nvehicule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Liste vehicules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Liste clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau client', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>