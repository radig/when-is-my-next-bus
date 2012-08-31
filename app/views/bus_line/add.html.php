<?php
	echo $this->form->create();
	echo $this->form->field('name', array('label' => 'Nome'));
	echo $this->form->submit('Enviar');
	echo $this->form->end();
?>