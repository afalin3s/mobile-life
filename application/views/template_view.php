<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Some mobile site</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="copyright" content="" />	  
	<meta name="revisit-after" content="3 days" />
	<link href="<?=UrlHelper::getUrl()?>/css/style.css" rel="stylesheet" type="text/css" />
	<!--[if IE]><link href="css/ie-transparency.css" rel="stylesheet" type="text/css" /><![endif]-->    
</head>

<body id="home">
<ul class="hide"><li><a href="#body">Skip to content</a></li></ul>
<div id="container">
	<div id="header">
	    <h1><a href="index.html">Mobile<span>Phones</span></a></h1>		
	</div>
    
	<div id="body">
		<ul id="nav">
			<li class="on first"><a href="<?=UrlHelper::getUrl()?>site/index">Home page</a></li>
			<li><a href="<?=UrlHelper::getUrl()?>base/index">Mobile base</a></li>
			<li><a href="<?=UrlHelper::getUrl()?>site/about">About me</a></li>
		</ul>
		<div id="content"><div>
				<?php include 'application/views/'.$content_view.'.php'; ?>
		</div></div>	
	</div>
	
	<div id="footer">
		<p class="left">&copy; 2013 Afalin</p>
		<p class="right">Template by <a href="http://www.onedollartemplates.com">One Dollar Templates</a></p>
	</div>	
</div>	
</body>
</html>
