<?php
/*
 * Created on 22.12.2013
 */
class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
	function action_index()
	{
		
	}
}