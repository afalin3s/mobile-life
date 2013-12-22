<?php
/*
 * Created on 22.12.2013
 */

class Route
{
	static function start() {
		// controller and action by default
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		
		
		// get controller name
		if (!empty($routes[1]))
		{
			$controller_name = $routes[1];
		}
		
		// get action name
		if (!empty($routes[2]))
		{
			$action_name = $routes[2];
		}
		
		// add prefixes
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		
		// include file with model class( file of model can be exists )
		
		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}
		
		// include file with controller class
		$controller_file = strtolower($controller_name).'.php';
		$controller_path ="application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		} else {
			/* so, greater to show here exception
			 * but now will do redirect to 404 page
			 */
			Route::ErrorPage404();
		}
		
		// creating of controller
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// run controller action
			$controller->$action();
		} else {
			// it can be exception but..
			Route::ErrorPage404();
		}
		
	}
	
	static function ErrorPage404()
	{
		//here must be 404 error
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
		header('Location:'.$host);
	}
}