<?php
/*
*HomeWebPage.inc.php - Front Page Class.
*/
// define conctrete 'HomeWebPage' class
class HomeWebpage extends WebPage {
	// define defaults for page links
	private $mainLinks=array('Home'=>'index.php', 'About Us'=>'about.php', 'Products'=>'products.php', 'Contact Us' =>'contact.php');
	public function __construct($title='Home Page',$content='This is the default context for Home Page.') {
		if (!$title || is_numeric($title) || strlen($title)>256) {
			throw new Exception('Invalid title for the web page.');
		}
		if (!$content) {
			throw new Exception('Invalid contents for the web page.');
		}
		$this->title = $title;
		$this->content = $content;
	}
	// implement 'buildMetaData()' method
	public function buildMetaData() {
$output=<<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-
8859-1" />

EOD;
		return $output;
	}
	// 'buildStyles()' method
	public function buildStyles() {
$output=<<<EOD
<style type="text/css">
body{
   padding: 0;
   margin: 0;
   background: #fff;
}

h2{
   margin: 0;
   font: bold 18px Arial, Helvetica, sans-serif;
   color: #000;      
}

p{
   font: normal 12px Arial, Helvetica, sans-serif;
   color: #000;      
}

#header{
   padding: 2%;
   background: #ffc;
}

#navbar{
   padding: 1% 2% 1% 2%;
   background: #fc0;
}

#navbar ul{
   list-style: none;
}

#navbar li{
   display: inline;
   padding-right: 4%;
}

#navbar a:link,#navbar a:visited{
   font: normal 12px Arial, Helvetica, sans-serif;
   color: #039;
   text-decoration: none;
}

#navbar a:hover{
   text-decoration: underline;
}

#mainwrapper{
   clear: both;
   height: 100%;
   overflow: hidden;
   background: #eee;
}

#mainwrapper .leftcol{
   position: relative;
   float: left;
}

#mainwrapper .rightcol{
   position: relative;
   float: right;
}

#leftbar{
   width: 16%;
   padding: 2%;
}

#centerbar{
   float: left;
   width: 55%;
   padding: 2%;
   background: #fff;
}          

#rightbar{
   width: 16%;
   padding: 2%;
}

#footer{
   clear: both;
   padding: 2%;
   background: #ffc;
}
</style>

EOD;
		return $output;
	}
	// implement 'buildHeader()' method
	public function buildHeader() {
		$output .=<<<EOD
<title>$this->title</title>
</head>
<body>
	<div id="header">
		<h2>This is the header section of the web page</h2>
		<p>Contents for header section go here.</p>
	</div>
EOD;
		return $output;
	}
	// implement 'buildLinks()' method
	public function buildLinks() {
		$output='<div id="navbar">'."n".'<h2>This is the navigation bar of the web page</h2>'."n".'<ul>'."n";
		foreach ($this->mainLinks as $label=>$link) {
			$output.='<li><a href="'.$link.'">'.$label.'</a></li>'."n";
		}
		$output.='</ul>'."n".'</div>';
		return $output;
	}
	// implement 'buildBody()' method
	public function buildBody(){
		$output=<<<EOD
	<div id="mainwrapper">
		<div id="leftbar" class="leftcol">
			<h2>This is the left column of the web page</h2>
			<p>Contents for left column go here..</p>
		</div>
		<div id="centerbar" class="leftcol">
			<h2>This is the center column of the web page</h2>
			<p>$this->content</p>
		</div>
		<div id="rightbar" class="rightcol">
			<h2>This is the right column of the web page</h2>
			<p>Contents for right column go here.</p>
		</div>
	</div>

EOD;
		return $output;
	}
	 // implement 'buildHeader()' method
	public function buildFooter() {
		$output.=<<<EOD

	<div id="footer">
		<h2>This is the footer section of the web page</h2>
		<p>Contents for footer section go here.</p>
	</div>
</body>
</html>

EOD;
		return $output;
	}
}
?>
