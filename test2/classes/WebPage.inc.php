<?php
/*
	WebPage.inc.php - WebPage Abstract Class.
*/
// define WebPage abstract class
abstract class WebPage {
	private $html;
	private $title;
	private $mainLinks;
	private $content;
	abstract public function __construct($title,$content);
	abstract public function buildMetaData();
	abstract public function buildStyles();
	abstract public function buildHeader();
	abstract public function buildLinks();
	abstract public function buildBody();
	abstract public function buildFooter();	
}
?>
