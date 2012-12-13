<div class="parcs index">
	<h2><?php __('Parcs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('numeroparc');?></th>
			<th><?php echo $this->Paginator->sort('ville');?></th>
			<th><?php echo $this->Paginator->sort('tel');?></th>
			<th><?php echo $this->Paginator->sort('ovehicules_id');?></th>
			<th><?php echo $this->Paginator->sort('nvehicules_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($parcs as $parc):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $parc['Parc']['id']; ?>&nbsp;</td>
		<td><?php echo $parc['Parc']['numeroparc']; ?>&nbsp;</td>
		<td><?php echo $parc['Parc']['ville']; ?>&nbsp;</td>
		<td><?php echo $parc['Parc']['tel']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parc['Ovehicules']['id'], array('controller' => 'ovehicules', 'action' => 'view', $parc['Ovehicules']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($parc['Nvehicules']['id'], array('controller' => 'nvehicules', 'action' => 'view', $parc['Nvehicules']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $parc['Parc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $parc['Parc']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $parc['Parc']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $parc['Parc']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Parc', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ovehicules', true), array('controller' => 'ovehicules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ovehicules', true), array('controller' => 'ovehicules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nvehicules', true), array('controller' => 'nvehicules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nvehicules', true), array('controller' => 'nvehicules', 'action' => 'add')); ?> </li>
	</ul>
</div>