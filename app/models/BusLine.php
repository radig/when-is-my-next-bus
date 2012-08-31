<?php

namespace app\models;

/**
*	Class representing bus lines. Holds information about them
*	Uses MongoDB connection
*/
class BusLine extends \lithium\data\Model {

	protected $_meta = array(
		'connection' => 'mongo'
	);

}

?>