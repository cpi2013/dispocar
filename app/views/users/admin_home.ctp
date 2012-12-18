<h2>Bienvenue dans la zone administration</h2>


          <li><a href="http://www.yahoo.com">Les formulaires reçus</a></li>
		  <li><a href="#">Ajout promotion</a></li>


<?php
	echo "<li>".$html->link('Les administrateurs',array('controller'=>'users','action'=>'index'))."</li>";
	echo "<li>".$html->link('Les concessionnaires',array('controller'=>'members','action'=>'index'))."</li>";
	echo "<li>".$html->link('Les parcs',array('controller'=>'parcs','action'=>'index'))."</li>";
	echo "<li>".$html->link('Les véhicules neufs',array('controller'=>'nvehicules','action'=>'index'))."</li>";
	echo "<li>".$html->link('Les véhicules occasions',array('controller'=>'ovehicules','action'=>'index'))."</li>";
	echo "<li>".$html->link('Client V occasions',array('controller'=>'clientvos','action'=>'index'))."</li>";
	echo "<li>".$html->link('Client V neufs',array('controller'=>'clients','action'=>'index'))."</li>";





	echo "<li>".$html->link('Deconnexion',array('controller'=>'users','action'=>'logout'))."</li>"
?>