<div class="nvehicules form">
<?php echo $this->Form->create('Nvehicule');?>
	<fieldset>
		<legend><?php __('Edit Nvehicule'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero');
		echo $this->Form->input('marque');
		echo $this->Form->input('model');
		echo $this->Form->input('carrosserie');
		echo $this->Form->input('puissance');
		echo $this->Form->input('couleur');
		echo $this->Form->input('finission');
		echo $this->Form->input('commentaire');
		echo $this->Form->input('photo');
		echo $this->Form->input('prix');
		echo $this->Form->input('boite');
		echo $this->Form->input('motorisation');
		echo $this->Form->input('clients_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Nvehicule.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Nvehicule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Nvehicules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>