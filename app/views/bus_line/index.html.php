<table>
	<tr>
		<th>Nome</th>
		<th>Ações</th>
	<tr>
<?php
	foreach ($buses as $bus) {
?>
	<tr>
		<td><?php echo $bus->name; ?></td>
		<td>
			<?php
				echo $this->html->link('ver', array('BusLine::view', 'id' => $bus->_id));
				echo ' - ';
				echo $this->html->link('editar', array('BusLine::edit', 'id' => $bus->_id));
				echo ' - ';
				echo $this->html->link('apagar', array('BusLine::delete', 'id' => $bus->_id));
			?>
		</td>
	</tr>
<?php
	}
?>
</table>
<div>
    <?php 
	    if($page > 1):
	    	echo $this->html->link('< Previous', array('BusLine::index', 'page'=> $page - 1));
	    endif;

	    if($total > ($limit * $page)):
			echo $this->html->link('Next >', array('BusLine::index', 'page'=> $page + 1));
	    endif;
   ?>
</div>