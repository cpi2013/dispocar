<div class="ovehicules index">
	<h2><?php __('Véhicules occasions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('marque');?></th>
			<th><?php echo $this->Paginator->sort('boîte');?></th>
			<th><?php echo $this->Paginator->sort('motorisation');?></th>
			<th><?php echo $this->Paginator->sort('kilometrage');?></th>
			<th><?php echo $this->Paginator->sort('circulation');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th><?php echo $this->Paginator->sort('prix');?></th>
			<th><?php echo $this->Paginator->sort('parc');?></th>

			<th class="actions"><?php __('');?></th>
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
		<td><?php echo $ovehicule['Ovehicule']['marque']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['boite']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['motorisation']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['kilometrage']; ?>&nbsp;</td>
		<td><?php echo $ovehicule['Ovehicule']['circulation']; ?>&nbsp;</td>
		  <td><?php
		echo $this->Html->link(
		$this->Html->image('lesimages/ovehicules/'.$ovehicule['Ovehicule']['filename'], array('width'=>'90','height'=>'68','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $ovehicule['Ovehicule']['id']),
		array('escape' => false)
				);
		?>&nbsp;	
		</td>

		<td><?php echo $ovehicule['Ovehicule']['prix']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ovehicule['Parc']['id'], array('controller' => 'parcs', 'action' => 'view', $ovehicule['Parc']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Voir', true), array('action' => 'view', $ovehicule['Ovehicule']['id'])); ?>
			<?php echo $this->Html->link(__('Editer', true), array('action' => 'edit', $ovehicule['Ovehicule']['id'])); ?>
			<?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $ovehicule['Ovehicule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ovehicule['Ovehicule']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nouveau véhicule', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Liste clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Client', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Accueil', true), array('controller' => 'members', 'action' => 'home')); ?> </li>

	</ul>
</div>