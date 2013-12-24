<?php
/*
 * Created on 22.12.2013
 */
class Controller_Mobile extends Controller
{
	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('portfolio_view.php', $data);
	}
}
