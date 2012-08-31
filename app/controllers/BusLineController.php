<?php

namespace app\controllers;

use app\models\BusLine;

class BusLineController extends \lithium\action\Controller {

	public function index() {
		$limit = 5;
		$page =  $this->request->page ?: 1;
		$total = BusLine::count();
		$buses = BusLine::all(compact('limit','page'));
		return compact('buses', 'total', 'page', 'limit');
	}

	public function add() {
		$bus = BusLine::create();
		if($this->request->data && $bus->save($this->request->data)) {
	        $this->redirect('BusLine::index');
	    }
	}

	public function view()
	{	
		$id = $this->request->params['id'];
		if (!isset($id))
			$this->redirect('BusLine::index');

		$bus = BusLine::find($id);
		return compact('bus');
	}

	public function edit()
	{	
		if(!empty($this->request->data)) {
			BusLine::update($this->request->data, array('_id' => $this->request->params['id']));
			$this->redirect('BusLine::index');
	    }

		$id = $this->request->params['id'];
		if (!isset($id))
			$this->redirect('BusLine::index');

	    $bus = BusLine::find($id);
		return compact('bus');
	}

	public function delete()
	{
		$id = $this->request->params['id'];
		if (!isset($id))
			$this->redirect('BusLine::index');

		BusLine::remove(array('_id' => $id));
		$this->redirect('BusLine::index');

	}
}

?>