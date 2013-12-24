<?php
/*
 * Created on 22.12.2013
 */
class Controller_Site extends Controller
{
	function action_index()
	{
		$this->view->generate('site/index');
	}
	
	function action_about()
	{
		$this->view->generate('site/about');
	}
}