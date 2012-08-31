<?php
	echo $this->form->create($bus);
	echo $this->form->field('_id', array('type' => 'hidden'));
	echo $this->form->field('name', array('label' => 'Nome'));
	echo $this->form->submit('Enviar');
	echo $this->form->end();
?>