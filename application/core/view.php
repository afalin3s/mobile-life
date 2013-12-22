<?php
/*
 * Created on 22.12.2013
 */
class View
{
	//public $template_view; // view by default
	
	function generate($content_view, $template_view, $data = null)
	{
		/*
		if(is_array($data)) {
			// convert elements of array to varibles
			extract($data);
		}
		*/
		
		include 'application/views/'.$template_view;
	}
}