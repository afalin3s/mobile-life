<?php
/*
 * Created on 22.12.2013
 */

class Route
{
	static function start() {
		// controller and action by default
		$controller_name = 'site';
		$action_name	 = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		
		
		//check index for users who set in browser sitename/index
		if($routes[1] == 'index') {
			$controller_name = 'site';
			$action_name	 = 'index';
		} else {
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
		}
		// adding get parameters
		
		if(isset($routes[4]))
		{
			$_GET[$routes[3]] = $routes[4];
		} else {
			if(isset($routes[3])) {
			 	if($routes[3]!="") {
			 		$_GET[] = $routes[3];
				}
			}
		}
		
		
		//check for 404 error
		if($controller_name == '404')
		{
			require_once('application/views/404.php');
			
			die();
		}
		
		// add prefixes
		$model_name		 = 'model_' . $controller_name;
		$controller_name = 'controller_' . $controller_name;
		$action_name	 = 'action_' . $action_name;
		
		// include file with model class( file of model can be exists )
		
		$model_file = strtolower($model_name) . '.php';
		$model_path = "application/models/" . $model_file;
		if(file_exists($model_path))
		{
			include "application/models/" . $model_file;
		}
		
		// include file with controller class
		$controller_file = strtolower($controller_name).'.php';
		$controller_path ="application/controllers/" . $controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/" . $controller_file;
		} else {
			/* so, greater to show here exception
			 * but now will do redirect to 404 page
			 */
			Route::ErrorPage404();
		}
		
		// creating of controller
		$controller = new $controller_name;
		$action 	= $action_name;
	
		if(method_exists($controller, $action))
		{	
			var_dump($controller);
			echo '</br>';
			echo $action;
			// run controller action
			$controller->$action();
		} else {
			// it can be exception but..
			Route::ErrorPage404();
		}
		
	}
	
	static function ErrorPage404()
	{
		//redirect to 404 error page
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/404';
		header('Location:'.$host);
	}
}