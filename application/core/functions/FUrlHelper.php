<?php
/*
 * Created on 24.12.2013
 */
class UrlHelper
{
	public static function getUrl() {
		return 'http://'.$_SERVER['HTTP_HOST'].'/';
	}
	
	public static function getPath() {
		return $_SERVER['DOCUMENT_ROOT'].'/';
	}
}
