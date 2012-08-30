MoufTemplate: the HTML template used for Mouf
=============================================

MoufTemplate is the HTML template used for the [Mouf project](http://mouf-php.com).

It is obviously a Mouf package, and extends the [Mouf TemplateInterface](https://github.com/thecodingmachine/html.template.templateinterface).
This means that if you are using Mouf, you can use the MoufTemplate in every place you would need a template implementing the TemplateInterface.

MoufTemplate has 5 zones: *content*, *top*, *left*, *right* and *bottom*.
Fill these zones using the Mouf UI.

Here is a sample code:

```php
<?php 
// Let's import all required classes
use Mouf\Html\Template\MoufTemplate\MoufTemplate;
use Mouf\Html\HtmlElement\HtmlBlock;

define ('ROOT_URL', "/composertest/");

require_once 'vendor/autoload.php';

// WARNING! this code is only to explain the inner workings of the MoufTemplate class
// Usually, you would never create a new instance of MoufTemplate, nor would you create 
// the $contentBlock or $leftBlock variables.
// Those are created and injected by Mouf, for you.

// Let's define the main content block
$contentBlock = new HtmlBlock();
$contentBlock->addText("Hello world!");

// Let's define the left content block
$leftBlock = new HtmlBlock();
$leftBlock->addText("My left menu!");

// Let's display the template
$template = new MoufTemplate();
$template->setContent($contentBlock);
$template->setLeft($leftBlock);
$template->toHtml();
```