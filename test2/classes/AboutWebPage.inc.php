<?php
class AboutUsWebPage extends HomeWebPage{
	private $mainLinks=array('Home'=>'index.php','About Us'=>'about.php','Products'=>'products.php','Contact Us'=>'contact.php');
	private $subLinks=array('Our company profile'=>'company.php','What customers are saying'=>'customers.php');
	// implement 'buildLinks()' method
	public function buildLinks() {
		$output='<div id="navbar">'."n".'<h2>This is the navigation bar of the web page</h2>'."n".'<ul>'."n";
		foreach($this->mainLinks as $label=>$link) {
			$output.='<li><a href="'.$link.'">'.$label.'</a></li>'."n";
		}
		$output.='</ul><ul>';
		foreach($this->subLinks as $label=>$link) {
			$output.='<li><a href="'.$link.'">'.$label.'</a></li>'."n";
		}
		$output.='</ul>'."n".'</div>';
		return $output;
   }
}
?>