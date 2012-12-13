<div class="parcs view">
<h2><?php  __('Parc');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parc['Parc']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numeroparc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parc['Parc']['numeroparc']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ville'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parc['Parc']['ville']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parc['Parc']['tel']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ovehicules'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($parc['Ovehicules']['id'], array('controller' => 'ovehicules', 'action' => 'view', $parc['Ovehicules']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nvehicules'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($parc['Nvehicules']['id'], array('controller' => 'nvehicules', 'action' => 'view', $parc['Nvehicules']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parc', true), array('action' => 'edit', $parc['Parc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Parc', true), array('action' => 'delete', $parc['Parc']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $parc['Parc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parcs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parc', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ovehicules', true), array('controller' => 'ovehicules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ovehicules', true), array('controller' => 'ovehicules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nvehicules', true), array('controller' => 'nvehicules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nvehicules', true), array('controller' => 'nvehicules', 'action' => 'add')); ?> </li>
	</ul>
</div>
