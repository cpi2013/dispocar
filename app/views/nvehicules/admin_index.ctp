<div class="nvehicules index">
	<h2>Véhicules neufs</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Id');?></th>
			<th><?php echo $this->Paginator->sort('marque');?></th>
			<th><?php echo $this->Paginator->sort('modèle');?></th>
			<th><?php echo $this->Paginator->sort('couleur');?></th>
			<th><?php echo $this->Paginator->sort('motorisation');?></th>
		    <th><?php echo $this->Paginator->sort('Prix');?></th>
			<th><?php echo $this->Paginator->sort('Statut');?></th>
			<th><?php echo $this->Paginator->sort('Etat');?></th>
			<th><?php echo $this->Paginator->sort('');?></th>
			<th><?php echo $this->Paginator->sort('');?></th>
			<th><?php echo $this->Paginator->sort('Parc');?></th>
			<th><?php echo $this->Paginator->sort('Ville');?></th>
			
			<th class="actions"><?php __('');?></th>


	</tr>
	<?php
	$i = 0;
	foreach ($nvehicules as $nvehicule):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $nvehicule['Nvehicule']['id']; ?>&nbsp;</td>
		<td><?php echo $nvehicule['Nvehicule']['marque']; ?>&nbsp;</td>
		<td><?php echo $nvehicule['Nvehicule']['model']; ?>&nbsp;</td>
		<td><?php echo $nvehicule['Nvehicule']['couleur']; ?>&nbsp;</td>
		<td><?php echo $nvehicule['Nvehicule']['motorisation']; ?>&nbsp;</td>
		<td><?php echo $nvehicule['Nvehicule']['prix']; ?>&nbsp;</td>
        <td><?php echo $nvehicule['Nvehicule']['envente']=='0'?'En vente':'Hors vente'; ?>&nbsp;</td>
		<td><?php echo $nvehicule['Nvehicule']['entransfert']=='0'?'Hors transfert':'En transfert'; ?>&nbsp;</td>
		<td><?php echo $nvehicule['Nvehicule']['vendu']=='0'?'':'vendu'; ?>&nbsp;</td>
        
		<td><?php
		echo $this->Html->link(
		$this->Html->image('lesimages/nvehicules/'.$nvehicule['Nvehicule']['filename'], array('width'=>'90','height'=>'68','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $nvehicule['Nvehicule']['id']),
		array('escape' => false)
				);
		?>&nbsp;	
		</td>
		<td>
			<?php echo $this->Html->link($nvehicule['Parc']['id'], array('controller' => 'parcs', 'action' => 'view', $nvehicule['Parc']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($nvehicule['Parc']['ville'], array('controller' => 'parcs', 'action' => 'view', $nvehicule['Parc']['id'])); ?>
		</td>
		

		
		<td class="actions">
			<?php echo $this->Html->link(__('voir', true), array('action' => 'view', $nvehicule['Nvehicule']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Liste clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Accueil', true), array('controller' => 'members', 'action' => 'home')); ?> </li>

	</ul>
</div>