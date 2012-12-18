<h2>Gestion concessionnaires</h2>


<?php
    echo "<li>".$html->link('Véhicules neufs',array('controller'=>'nvehicules','action'=>'index'))."</li>";
	echo "<li>".$html->link('Véhicules occasions',array('controller'=>'ovehicules','action'=>'index'))."</li>";
	echo "<li>".$html->link('Gestion clients véhicule neuf',array('controller'=>'clients','action'=>'index'))."</li>";
	echo "<li>".$html->link('Gestion clients véhicule occasion',array('controller'=>'clientvos','action'=>'index'))."</li>";


	echo "<li>".$html->link('Deconnexion',array('controller'=>'members','action'=>'logout'))."</li>";

?>