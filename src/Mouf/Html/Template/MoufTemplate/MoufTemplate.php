<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Html\Template\MoufTemplate;

use Mouf\Html\Template\BaseTemplate\BaseTemplate;
use Mouf\Html\HtmlElement\HtmlElementInterface;

/**
 * Template class for Mouf.
 * This class relies on /views/mouf.php for the design
 * 
 * @Component
 */
class MoufTemplate extends BaseTemplate  {

	const TEMPLATE_ROOT_URL = "vendor/mouf/html.template.mouftemplate/"; 

	
	/**
	 * The left menu of the template.
	 * 
	 * @var HtmlElementInterface
	 */
	protected $left;
	
	/**
	 * The right menu of the template.
	 * 
	 * @var HtmlElementInterface
	 */
	protected $right;
	
	/**
	 * The header of the template.
	 * 
	 * @var HtmlElementInterface
	 */
	public $header;
	
	/**
	 * The footer of the template.
	 * 
	 * @var HtmlElementInterface
	 */
	protected $footer;
	
	/**
	 * The URL of the favicon, relative to the ROOT_URL.
	 * If empty, no favicon is passed.
	 * 
	 * @Property
	 * @var string
	 */
	public $favIconUrl;
	
	/**
	 * The URL of the favicon, relative to the ROOT_URL.
	 * If empty, no favicon is passed.
	 * 
	 * @Property
	 * @var string
	 */
	public $logoUrl;
	
	/**
	 * Default constructor
	 */
	public function __construct() {
		parent::__construct();
		$this->favIconUrl = self::TEMPLATE_ROOT_URL."images/favicon.png";
		$this->logoUrl = self::TEMPLATE_ROOT_URL."images/logo.png";
	}

	/**
	 * Draws the Gray page by calling the template in /views/template/gray.php
	 */
	public function toHtml(){
		header('Content-Type: text/html; charset=utf-8');

		include __DIR__."/../../../../../views/mouf.php";
	}
	
	/**
	 * The left menu of the template.
	 *
	 * @Property
	 * @param HtmlElementInterface $left
	 */
	public function setLeft(HtmlElementInterface $left) {
		$this->left = $left;
	}
	
	/**
	 * The right menu of the template.
	 *
	 * @Property
	 * @param HtmlElementInterface $right
	 */
	public function setRight(HtmlElementInterface $right) {
		$this->right = $right;
	}
	
	/**
	 * The header of the template.
	 *
	 * @Property
	 * @param HtmlElementInterface $header
	 */
	public function setHeader(HtmlElementInterface $header) {
		$this->header = $header;
	}
	
	/**
	 * The footer of the template.
	 *
	 * @Property
	 * @param HtmlElementInterface $footer
	 */
	public function setFooter(HtmlElementInterface $footer) {
		$this->footer = $footer;
	}
	
}
?>