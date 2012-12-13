<div class="ovehicules index">
	<h2><?php __('Ovehicules');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('numero');?></th>
			<th><?php echo $this->Paginator->sort('marque');?></th>
			<th><?php echo $this->Paginator->sort('model');?></th>
			<th><?php echo $this->Paginator->sort('carrosserie');?></th>
			<th><?php echo $this->Paginator->sort('puissance');?></th>
			<th><?php echo $this->Paginator->sort('couleur');?></th>
			<th><?php echo $this->Paginator->sort('finission');?></th>
			<th><?php echo $this->Paginator->sort('commentaire');?></th>
			<th><?php echo $this->Paginator->sort('photo');?></th>
			<th><?php echo $this->Paginator->sort('prix');?></th>
			<th><?php echo $this->Paginator->sort('boite');?></th>
			<th><?php echo $this->Paginator->sort('motorisation');?></th>
			<th><?php echo $this->Paginator->sort('kilometrage');?></th>
			<th><?php echo $this->Paginator->sort('circulation');?></th>
			<th><?php echo $this->Paginator->sort('clients_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ovehicules as $ovehicule):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ovehicule['Ovehicule']['id']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['numero']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['marque']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['model']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['carrosserie']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['puissance']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['couleur']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['finission']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['commentaire']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['photo']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['prix']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['boite']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['motorisation']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['kilometrage']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['circulation']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ovehicule['Clients']['id'], array('controller' => 'clients', 'action' => 'view', $ovehicule['Clients']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ovehicule['Ovehicule']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ovehicule['Ovehicule']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ovehicule['Ovehicule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ovehicule['Ovehicule']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ovehicule', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>