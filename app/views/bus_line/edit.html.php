<?php
	echo $this->form->create($bus, array('id' => $id));
	echo $this->form->field('name', array('label' => 'Nome'));
	echo $this->form->submit('Enviar');
	echo $this->form->end();
?>