<div class="clients index">
	<h2><?php __('Clients');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nom');?></th>
			<th><?php echo $this->Paginator->sort('prenom');?></th>
			<th><?php echo $this->Paginator->sort('raisonsociale');?></th>
			<th><?php echo $this->Paginator->sort('ville');?></th>
			<th><?php echo $this->Paginator->sort('tel');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($clients as $client):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $client['Client']['id']; ?>&nbsp;</td>
		<td><?php echo $client['Client']['nom']; ?>&nbsp;</td>
		<td><?php echo $client['Client']['prenom']; ?>&nbsp;</td>
		<td><?php echo $client['Client']['raisonsociale']; ?>&nbsp;</td>
		<td><?php echo $client['Client']['ville']; ?>&nbsp;</td>
		<td><?php echo $client['Client']['tel']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $client['Client']['id'])); ?>
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
	
</div>