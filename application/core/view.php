<?php
/*
 * Created on 22.12.2013
 */
class View
{
	private $template_view = 'template_view.php';
	
	function generate($content_view, $data = null)
	{
		
		if(is_array($data)) {
			// convert elements of array to varibles
			extract($data);
		}
		
		include 'application/views/'.$this->template_view;
	}
	
}