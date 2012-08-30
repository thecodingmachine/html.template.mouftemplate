<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */
package Mouf\Html\Template\MoufTemplate;

use \Mouf\Html\Template\TemplateInterface\BaseTemplate\BaseTemplate;
use \Mouf\Html\HtmlElement\HtmlElementInterface;

/**
 * Template class for Mouf.
 * This class relies on /views/mouf.php for the design
 * 
 * @Component
 */
class MoufTemplate extends BaseTemplate  {

	const TEMPLATE_ROOT_URL = "vendor/Mouf/html.template.MoufTemplate/"; 
	
	/**
	 * The main content of the page is displayed in this block.
	 * 
	 * @Property
	 * @var HtmlElementInterface
	 */
	public $content;
	
	/**
	 * The left menu of the template.
	 * 
	 * @Property
	 * @var HtmlElementInterface
	 */
	public $left;
	
	/**
	 * The right menu of the template.
	 * 
	 * @Property
	 * @var HtmlElementInterface
	 */
	public $right;
	
	/**
	 * The header of the template.
	 * 
	 * @Property
	 * @var HtmlElementInterface
	 */
	public $header;
	
	/**
	 * The footer of the template.
	 * 
	 * @Property
	 * @var HtmlElementInterface
	 */
	public $footer;
	
	/**
	 * The URL of the favicon, relative to the ROOT_URL.
	 * If empty, no favicon is passed.
	 * 
	 * @Property
	 * @var string
	 */
	public $favIconUrl = TEMPLATE_ROOT_URL."images/favicon.png";
	
	/**
	 * The URL of the favicon, relative to the ROOT_URL.
	 * If empty, no favicon is passed.
	 * 
	 * @Property
	 * @var string
	 */
	public $logoUrl = TEMPLATE_ROOT_URL."images/logo.png";
	
	/**
	 * Default constructor
	 */
	public function __construct() {
		parent::__construct();
	}


	/**
	 * Draws the Gray page by calling the template in /views/template/gray.php
	 */
	public function toHtml(){
		header('Content-Type: text/html; charset=utf-8');

		include __DIR__."/../../../../../views/mouf.php";
	}
}
?>