<h2>Page d'acceuil à Designer</h2>


<?php
    echo "<li>".$html->link('Administrateur',array('controller'=>'users','action'=>'login'))."</li>";
	echo "<li>".$html->link('Concessionnaire',array('controller'=>'members','action'=>'login'))."</li>";

?>

